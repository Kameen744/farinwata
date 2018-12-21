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

    public function Resize_image($width = 0, $height = 0, $quality = 90, $filename_in = null, $filename_out = null)
    {
        $this->Filename = $filename_in;
        $this->Extension = strtolower($this->Get_file_extension($this->Filename));

        $size = getimagesize($this->Filename);
        $ratio = $size[0] / $size[1];
        if ($ratio >= 1){
            $scale = $width / $size[0];
        } else {
            $scale = $height / $size[1];
        }
        // make sure its not smaller to begin with!
        if ($width >= $size[0] && $height >= $size[1]){
            $scale = 1;
        }

        // echo $fileext;
        switch ($this->Extension)
        {
            case "jpg":
                $im_in = imagecreatefromjpeg($this->Filename);
                $im_out = imagecreatetruecolor($size[0] * $scale, $size[1] * $scale);
                imagecopyresampled($im_out, $im_in, 0, 0, 0, 0, $size[0] * $scale, $size[1] * $scale, $size[0], $size[1]);
                imagejpeg($im_out, $filename_out, $quality);
            break;
            case "gif":
                $im_in = imagecreatefromgif($this->Filename);
                $im_out = imagecreatetruecolor($size[0] * $scale, $size[1] * $scale);
                imagecopyresampled($im_out, $im_in, 0, 0, 0, 0, $size[0] * $scale, $size[1] * $scale, $size[0], $size[1]);
                imagegif($im_out, $filename_out, $quality);
            break;
            case "png":
                $im_in = imagecreatefrompng($this->Filename);
                $im_out = imagecreatetruecolor($size[0] * $scale, $size[1] * $scale);
                imagealphablending($im_in, true); // setting alpha blending on
                imagesavealpha($im_in, true); // save alphablending setting (important)
                imagecopyresampled($im_out, $im_in, 0, 0, 0, 0, $size[0] * $scale, $size[1] * $scale, $size[0], $size[1]);
                imagepng($im_out, $filename_out, 9);
            break;
        }
        imagedestroy($im_out);
        imagedestroy($im_in);
    }

    private function resize_img ($img, $width, $height, $post) {
        $config['image_library'] = 'gd2';
        $config['source_image'] = $img;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = $width;
        $config['height'] = $height;

        $this->load->library('image_lib', $config);
    }

    public function do_upload($post){
        $config['file_name']            = $post .'.jpg';
        $config['upload_path']          = './assets/img/uploads';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
        } else {
                $data = array('upload_data' => $this->upload->data());

                $this->load->view('upload_success', $data);
        }
    }

    public function create_post() {
        $data = [
            $PostTitle => $this->input->post('PostTitle'),
            $PostContent => $this->input->post('PostContent'),
            $PostType => $this->input->post('PostType'),
            $PostCategory => $this->input->post('PostCategory'),
            $PostFile => $this->input->post('PostFile'),
        ];

        return $this->db->insert('news', $data);
    }

}






