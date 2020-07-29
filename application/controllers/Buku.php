 <?php

    class Buku extends BD_Controller
    {
        public function buku_get()
        {
            $data = $this->db->get('buku');
            $this->response($data->result(), 200);
        }
        public function buku_post()
        {
            $data = $this->post();
            $result = $this->db->insert('buku', $data);
            $this->response($result, 200);
        }
        public function buku_put()
        {
            $data = $this->put();
            $id = $this->uri->segment(3);
            $this->db->where('id', $id);
            $result = $this->db->update('buku', $data);
            $this->response($result, 200);
        }
        public function buku_delete()
        {
            $id = $this->uri->segment(3);
            $this->db->where('id', $id);
            $result = $this->db->delete('buku');
            $this->response($result, 200);
        }
    }
