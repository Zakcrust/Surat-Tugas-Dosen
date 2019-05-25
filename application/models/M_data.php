<?php

class M_data extends CI_Model
{
    function tampil_data($table)
    {
        return $this->db->get($table);
    }

    function inputData($table, $arr)
    {
        $this->db->insert($table, $arr);
    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }	

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function search($where,$column,$table)
    {
        $this->db->like($column,$where);
        return $this->db->get($table);
    }

    function stringMonth($month)
    {
        switch($month)
        {
            case 1 : return "Januari";
            case 2 : return "Februari";
            case 3 : return "Maret";
            case 4 : return "April";
            case 5 : return "Mei";
            case 6 : return "Juni";
            case 7 : return "Juli";
            case 8 : return "Agustus";
            case 9 : return "September";
            case 10 : return "Oktober";
            case 11 : return "November";
            case 12 : return "Desember";
            default : return "invalid";
        }
        return "";
    }

    function numberToRoman($num)
    {
        // Make sure that we only use the integer portion of the value 
        $n = intval($num);
        $result = '';

        // Declare a lookup array that we will use to traverse the number: 
        $lookup = array(
            'M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400,
            'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40,
            'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1
        );

        foreach ($lookup as $roman => $value) {
            // Determine the number of matches 
            $matches = intval($n / $value);

            // Store that many characters 
            $result .= str_repeat($roman, $matches);

            // Substract that from the number 
            $n = $n % $value;
        }

        // The Roman numeral should be built, return it 
        return $result;
    }
    
    function getJurusan($jurusan)
    {
        switch($jurusan)
        {   
            case "Teknik Informatika" : return "IF";
            case "Teknik Elektronika" : return "EE";
            case "Biologi Sains"      : return "BIO";
            case "Kimia Sains"        : return "KIM";
            case "Fisika Sains"       : return "FIS";
            case "Matematika Sains"   : return "MAT";
        }

    }

}
