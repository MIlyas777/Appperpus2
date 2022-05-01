<?php
class Adminmodel extends CI_Model
{
    // ^ membuat fungsi untuk mengambil data dari tabel buku
    function get_buku()
    {
        $query = $this->db->get('buku');
        return $query->result();
    }

    function get_buku2()
    {
        $query = $this->db->order_by('stok','asc');
        $query = $this->db->get('buku');
        return $query->result();
    }

    function get_buku3()
    {
        $query = $this->db->list_query('buku');
        foreach ($query as $query)
        {
                echo $query;
        }
    }


    // ^ membuat fungsi untuk mengambil data dari tabel penerbit
    function get_penerbit()
    {
        $query = $this->db->get('penerbit');
        return $query->result();
    }

    // ^ membuat fungsi untuk mengambil data dari tabel buku berdasarkan id
    function get_detail_buku($a)
    {
        $this->db->where('id_buku', $a);
        return $this->db->get('buku')->row_array();
    }

    // ^ membuat fungsi untuk mengambil data dari tabel penerbit berdasarkan id
    function get_detail_penerbit($a)
    {
        $this->db->where('id_penerbit', $a);
        return $this->db->get('penerbit')->row_array();
    }

    // ^ membuat fungsi mencari buku
    function cari_buku($keyword)
    {
        $this->db->like('nama_buku', $keyword);
        $query = $this->db->get('buku');
        return $query->result();
    }

    // ^ membuat fungsi insert buku
    public function insert_buku($a)
    {
        $data = array(
            'id_buku' => $a['id_buku'],
            'kategori' => $a['kategori'],
            'nama_buku' => $a['nama_buku'],
            'harga' => $a['harga'],
            'stok' => $a['stok'],
            'penerbit' => $a['penerbit']
        );
        return $this->db->insert('buku', $data);
    }

    // ^ membuat fungsi insert penerbit
    public function insert_penerbit($a)
    {
        $data = array(
            'id_penerbit' => $a['id_penerbit'],
            'nama' => $a['nama'],
            'alamat' => $a['alamat'],
            'kota' => $a['kota'],
            'telepon' => $a['telepon'],
            'email' => $a['email']
        );
        return $this->db->insert('penerbit', $data);
    }

    // ^ membuat fungsi update buku
    public function update_buku($a, $id)
    {
        $data = array(
            'id_buku' => $a['id_buku'],
            'kategori' => $a['kategori'],
            'nama_buku' => $a['nama_buku'],
            'harga' => $a['harga'],
            'stok' => $a['stok'],
            'penerbit' => $a['penerbit']
        );
        $this->db->where('id_buku', $id);
        return $this->db->update('buku', $data);
    }

    // ^ membuat fungsi update penerbit
    public function update_penerbit($a, $id)
    {
        $data = array(
            'id_penerbit' => $a['id_penerbit'],
            'nama' => $a['nama'],
            'alamat' => $a['alamat'],
            'kota' => $a['kota'],
            'telepon' => $a['telepon'],
            'email' => $a['email']
        );
        $this->db->where('id_penerbit', $id);
        return $this->db->update('penerbit', $data);
    }

    // ^ membuat fungsi delete buku
    public function delete_buku($id)
    {
        $this->db->where('id_buku', $id);
        $this->db->delete('buku');
    }

    // ^ membuat fungsi delete penerbit
    public function delete_penerbit($id)
    {
        $this->db->where('id_penerbit', $id);
        $this->db->delete('penerbit');
    }

    public function get_pasien_by_id($a)
    {
        return $this->db->get_where('pasien',['idpasien' => $a])->row_array();
    }
}
