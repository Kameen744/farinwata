<?php
class Post_model extends CI_Model
{
    public function __construct() {
        $this->load->database();
    }

    public function get_post($id = NULL){
        if($id === NULL) {
           return;
        }

        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('id', $id);
        return $this->db->get()->row_array();
    }
    public function get_relatedPosts($id = NULL, $limit, $offset){
        if($id === NULL) {
           return;
        }

        $this->db->select('Nws.News_Title, Nws.Category_id, Nws.Img_Url, Nws.id');
        $this->db->from('news NewsRef');
        $this->db->join('news AS Nws', 'NewsRef.Category_id=Nws.Category_id');
        $this->db->where('NewsRef.id', $id);
        $this->db->limit($limit, $offset);
        $this->db->order_by('Nws.id', 'DESC');
        return $this->db->get()->result_array();
    }
    public function get_category($id) {
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('News_Type_id', $id);
        return $this->db->get()->result_array();
    }

    public function Resize_image($width, $height, $quality = 90, $filename_in, $filename_out, $extension)
    {
        $configI['image_library'] = 'gd2';
        $configI['source_image']    = $filename_in;
        $configI['create_thumb'] = FALSE;
        $configI['maintain_ratio'] = FALSE;
        $configI['width']    = $width;
        $configI['height']  = $height;
        $configI['new_image'] = $filename_out;    
        $this->load->library('image_lib', $configI);

        $this->image_lib->initialize($configI);
        $this->image_lib->resize();
        $this->image_lib->clear();


        // $this->Filename = $filename_in;

        // $size = getimagesize($this->Filename);
        // $ratio = $size[0] / $size[1];
        // if ($ratio >= 1){
        //     $scale = $width / $size[0];
        // } else {
        //     $scale = $height / $size[1];
        // }
        // // make sure its not smaller to begin with!
        // if ($width >= $size[0] && $height >= $size[1]){
        //     $scale = 1;
        // }

        // // echo $fileext;
        // switch ($extension)
        // {
        //     case "image/jpeg":
        //         $im_in = imagecreatefromjpeg($this->Filename);
        //         $im_out = imagecreatetruecolor($size[0] * $scale, $size[1] * $scale);
        //         imagecopyresampled($im_out, $im_in, 0, 0, 0, 0, $size[0] * $scale, $size[1] * $scale, $size[0], $size[1]);
        //         imagejpeg($im_out, $filename_out, $quality);
        //     break;
        //     case "image/gif":
        //         $im_in = imagecreatefromgif($this->Filename);
        //         $im_out = imagecreatetruecolor($size[0] * $scale, $size[1] * $scale);
        //         imagecopyresampled($im_out, $im_in, 0, 0, 0, 0, $size[0] * $scale, $size[1] * $scale, $size[0], $size[1]);
        //         imagegif($im_out, $filename_out, $quality);
        //     break;
        //     case "image/png":
        //         $im_in = imagecreatefrompng($this->Filename);
        //         $im_out = imagecreatetruecolor($size[0] * $scale, $size[1] * $scale);
        //         imagealphablending($im_in, true); // setting alpha blending on
        //         imagesavealpha($im_in, true); // save alphablending setting (important)
        //         imagecopyresampled($im_out, $im_in, 0, 0, 0, 0, $size[0] * $scale, $size[1] * $scale, $size[0], $size[1]);
        //         imagepng($im_out, $filename_out, 9);
        //     break;
        // }
        // imagedestroy($im_out);
        // imagedestroy($im_in);
    }

    public function create_post() {
        $this->db->select('*, COUNT(*) as count');
        $this->db->from('news');
        $recs = $this->db->get()->row_array();

        $post = 'Post_' .$recs['count'];
        $savurl = './assets/img/'.$post;
        $fileName = $_FILES['PostFile']['tmp_name'];
        $fileType= $_FILES['PostFile']['type'];

        $data = [
            'News_Title' => $this->input->post('PostTitle'),
            'Description' => $this->input->post('PostContent'),
            'Img_url' => $post,
            'Authors_id' => 1,
            'Category_id' => $this->input->post('PostCategory'),
            'Category_News_Type_id' => $this->input->post('PostType'),
            // $PostFile => $this->input->post('PostFile')
        ];
        
        if($this->db->insert('news', $data)) {
            $this->Resize_image(600, 345, 90, $fileName, $savurl .'lg.jpg', $fileType);
            $this->Resize_image(400, 228, 90, $fileName, $savurl .'md.jpg', $fileType);
            $this->Resize_image(200, 114, 90, $fileName, $savurl .'sm.jpg', $fileType);
            echo 'Success';
        }
        
    }

}






