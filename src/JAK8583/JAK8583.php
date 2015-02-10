<?php

namespace JAK8583;

// +------------------------------------------------------------------------+
// | JAK8583.class.php                                                      |
// +------------------------------------------------------------------------+
// | Copyright (c) Jimmi Kembaren 2009. All rights reserved.                |
// | Version       0.7                                                      |
// |		customize bit 29 & 31					    |
// | Last modified 16/05/2009                                               |
// | Email         jimmi.kembaren@gmail.com                                 |
// | Web           http://www.iso8583online.com                             |
// +------------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify   |
// | it under the terms of the GNU General Public License version 2 as      |
// | published by the Free Software Foundation.                             |
// |                                                                        |
// | This program is distributed in the hope that it will be useful,        |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of         |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the          |
// | GNU General Public License for more details.                           |
// |                                                                        |
// | You should have received a copy of the GNU General Public License      |
// | along with this program; if not, write to the                          |
// |   Free Software Foundation, Inc., 59 Temple Place, Suite 330,          |
// |   Boston, MA 02111-1307 USA                                            |
// |                                                                        |
// | Please give credit on sites that use class.upload and submit changes   |
// | of the script so other people can use them as well.                    |
// | This script is free to use, don't abuse.                               |
// +------------------------------------------------------------------------+
//

   
class JAK8583 {
    private $DATA_ELEMENT	= array (
        1	=> array('b', 16, 0),
        2	=> array('an', 19, 1),
        3	=> array('n', 6, 0),
        4	=> array('n', 12, 0),
        5	=> array('n', 12, 0),
        6	=> array('n', 12, 0),
        7	=> array('an', 10, 0),
        8	=> array('n', 8, 0),
        9	=> array('n', 8, 0),
        10	=> array('n', 8, 0),
        11	=> array('n', 6, 0),
        12	=> array('n', 6, 0),
        13	=> array('n', 4, 0),
        14	=> array('n', 4, 0),
        15	=> array('n', 4, 0),
        16	=> array('n', 4, 0),
        17	=> array('n', 4, 0),
        18	=> array('n', 4, 0),
        19	=> array('n', 3, 0),
        20	=> array('n', 3, 0),
        21	=> array('n', 3, 0),
        22	=> array('n', 3, 0),
        23	=> array('n', 3, 0),
        24	=> array('n', 3, 0),
        25	=> array('n', 2, 0),
        26	=> array('n', 2, 0),
        27	=> array('n', 1, 0),
        28	=> array('n', 8, 0),
        29	=> array('an', 9, 0),
        30	=> array('n', 8, 0),
        31	=> array('an', 9, 0),
        32	=> array('n', 11, 1),
        33	=> array('n', 11, 1),
        34	=> array('an', 28, 1),
        35	=> array('z', 37, 1),
        36	=> array('n', 104, 1),
        37	=> array('an', 12, 0),
        38	=> array('an', 6, 0),
        39	=> array('an', 2, 0),
        40	=> array('an', 3, 0),
        41	=> array('ans', 8, 0),
        42	=> array('ans', 15, 0),
        43	=> array('ans', 40, 0),
        44	=> array('an', 25, 1),
        45	=> array('an', 76, 1),
        46	=> array('an', 999, 1),
        47	=> array('an', 999, 1),
        48	=> array('ans', 119, 1),
        49	=> array('an', 3, 0),
        50	=> array('an', 3, 0),
        51	=> array('a', 3, 0),
        52	=> array('an', 16, 0),
        53	=> array('an', 18, 0),
        54	=> array('an', 120, 0),
        55	=> array('ans', 999, 1),
        56	=> array('ans', 999, 1),
        57	=> array('ans', 999, 1),
        58	=> array('ans', 999, 1),
        59	=> array('ans', 99, 1),
        60	=> array('ans', 60, 1),
        61	=> array('ans', 99, 1),
        62	=> array('ans', 999, 1),
        63	=> array('ans', 999, 1),
        64	=> array('b', 16, 0),
        65	=> array('b', 16, 0),
        66	=> array('n', 1, 0),
        67	=> array('n', 2, 0),
        68	=> array('n', 3, 0),
        69	=> array('n', 3, 0),
        70	=> array('n', 3, 0),
        71	=> array('n', 4, 0),
        72	=> array('ans', 999, 1),
        73	=> array('n', 6, 0),
        74	=> array('n', 10, 0),
        75	=> array('n', 10, 0),
        76	=> array('n', 10, 0),
        77	=> array('n', 10, 0),
        78	=> array('n', 10, 0),
        79	=> array('n', 10, 0),
        80	=> array('n', 10, 0),
        81	=> array('n', 10, 0),
        82	=> array('n', 12, 0),
        83	=> array('n', 12, 0),
        84	=> array('n', 12, 0),
        85	=> array('n', 12, 0),
        86	=> array('n', 15, 0),
        87	=> array('an', 16, 0),
        88	=> array('n', 16, 0),
        89	=> array('n', 16, 0),
        90	=> array('an', 42, 0),
        91	=> array('an', 1, 0),
        92	=> array('n', 2, 0),
        93	=> array('n', 5, 0),
        94	=> array('an', 7, 0),
        95	=> array('an', 42, 0),
        96	=> array('an', 8, 0),
        97	=> array('an', 17, 0),
        98	=> array('ans', 25, 0),
        99	=> array('n', 11, 1),
        100	=> array('n', 11, 1),
        101	=> array('ans', 17, 0),
        102	=> array('ans', 28, 1),
        103	=> array('ans', 28, 1),
        104	=> array('an', 99, 1),
        105	=> array('ans', 999, 1),
        106	=> array('ans', 999, 1),
        107	=> array('ans', 999, 1),
        108	=> array('ans', 999, 1),
        109	=> array('ans', 999, 1),
        110	=> array('ans', 999, 1),
        111	=> array('ans', 999, 1),
        112	=> array('ans', 999, 1),
        113	=> array('n', 11, 1),
        114	=> array('ans', 999, 1),
        115	=> array('ans', 999, 1),
        116	=> array('ans', 999, 1),
        117	=> array('ans', 999, 1),
        118	=> array('ans', 999, 1),
        119	=> array('ans', 999, 1),
        120	=> array('ans', 999, 1),
        121	=> array('ans', 999, 1),
        122	=> array('ans', 999, 1),
        123	=> array('ans', 999, 1),
        124	=> array('ans', 255, 1),
        125	=> array('ans', 50, 1),
        126	=> array('ans', 6, 1),
        127	=> array('ans', 999, 1),
        128	=> array('b', 16, 0)
    );
    
    private $_data	= array();
    private $_bitmap	= '';
    private $_mti	= '';
    private $_iso	= '';
    private $_valid	= array();


    
    /* --------------------------------------------------------------
        private functions
       -------------------------------------------------------------- */
    
    //return data element in correct format
    private function _packElement($data_element, $data) {
        $result	= "";

        //numeric value
        if ($data_element[0]=='n' && is_numeric($data) && strlen($data)<=$data_element[1]) {
            $data	= str_replace(".", "", $data);
            
            //fix length
            if ($data_element[2]==0) {
                $result	= sprintf("%0". $data_element[1] ."s", $data);
            }
            //dinamic length
            else {
                if (strlen($data) <= $data_element[1]) {                
                    $result	= sprintf("%0". strlen($data_element[1])."d", strlen($data)). $data;
                }
            }
        }

        //alpha value
        if (($data_element[0]=='a' && ctype_alpha($data) && strlen($data)<=$data_element[1]) ||
            ($data_element[0]=='an' && ctype_alnum($data) && strlen($data)<=$data_element[1]) ||
            ($data_element[0]=='z' && strlen($data)<=$data_element[1]) ||
            ($data_element[0]=='ans' && strlen($data)<=$data_element[1])) {

            //fix length
            if ($data_element[2]==0) {
                $result	= sprintf("% ". $data_element[1] ."s", $data);
            } 
            //dinamic length
            else {
                if (strlen($data) <= $data_element[1]) {                
                    $result	= sprintf("%0". strlen($data_element[1])."s", strlen($data)). $data;
                }
            }
        }

        //bit value
        if ($data_element[0]=='b' && strlen($data)<=$data_element[1]) {
            //fix length
            if ($data_element[2]==0) {
                $tmp	= sprintf("%0". $data_element[1] ."d", $data);

                while ($tmp!='') {
                    $result	.= base_convert(substr($tmp, 0, 4), 2, 16);
                    $tmp	= substr($tmp, 4, strlen($tmp)-4);
                }
            }
        }

        return $result;
    }

    //calculate bitmap from data element    
    private function _calculateBitmap() {	
        $tmp	= sprintf("%064d", 0);    
        $tmp2	= sprintf("%064d", 0);    
        foreach ($this->_data as $key=>$val) {
            if ($key<65) {
                $tmp[$key-1]	= 1;
            }
            else {
                $tmp[0]	= 1;
                $tmp2[$key-65]	= 1;
            }
        }
        
        $result	= "";
        if ($tmp[0]==1) {
            while ($tmp2!='') {
                $result	.= base_convert(substr($tmp2, 0, 4), 2, 16);
                $tmp2	= substr($tmp2, 4, strlen($tmp2)-4);
            }
        }
        $main	= "";
        while ($tmp!='') {
            $main	.= base_convert(substr($tmp, 0, 4), 2, 16);
            $tmp	= substr($tmp, 4, strlen($tmp)-4);
        }
        $this->_bitmap	= strtoupper($main. $result);
        
        return $this->_bitmap;
    }
    
    
    //parse iso string and retrieve mti 
    private function _parseMTI() {
        $this->addMTI(substr($this->_iso, 0, 4));
        if (strlen($this->_mti)==4 && $this->_mti[1]!=0) {
            $this->_valid['mti'] = true;
        }
    }

    //clear all data
    private function _clear() {
        $this->_mti	= '';
        $this->_bitmap	= '';
        $this->_data	= '';
        $this->_iso	= '';
    }

    //parse iso string and retrieve bitmap    
    private function _parseBitmap() {
        $this->_valid['bitmap']	= false;
        $inp	= substr($this->_iso, 4, 32);
        if (strlen($inp)>=16) {
            $primary	= '';
            $secondary	= '';
            for ($i=0; $i<16; $i++) {
                $primary	.= sprintf("%04d", base_convert($inp[$i], 16, 2));
            }
            if ($primary[0]==1 && strlen($inp)>=32) {
                for ($i=16; $i<32; $i++) {
                    $secondary	.= sprintf("%04d", base_convert($inp[$i], 16, 2));
                }
                $this->_valid['bitmap'] = true;
            }
            if ($secondary=='') $this->_valid['bitmap']	= true;
        }
        //save to data element with ? character
        $tmp	= $primary. $secondary;
        for ($i=0; $i<strlen($tmp); $i++) {
            if ($tmp[$i]==1) {
                $this->_data[$i+1]	= '?';
            }
        }
        $this->_bitmap	= $tmp;

        return $tmp;
    }

    //parse iso string and retrieve data element
    private function _parseData() {
        if (isset($this->_data[1]) && $this->_data[1] == '?') {
            $inp	= substr($this->_iso, 4+32, strlen($this->_iso)-4-32);
        }
        else {
            $inp	= substr($this->_iso, 4+16, strlen($this->_iso)-4-16);

        }

        if (is_array($this->_data)) {
          $this->_valid['data']	= true;
          foreach ($this->_data as $key=>$val) {
            $this->_valid['de'][$key]	= false;
            if ($this->DATA_ELEMENT[$key][0]!='b') {
                //fix length
                if ($this->DATA_ELEMENT[$key][2]==0) {
                    $tmp	= substr($inp, 0, $this->DATA_ELEMENT[$key][1]);
                    if (strlen($tmp)==$this->DATA_ELEMENT[$key][1]) {
                        if ($this->DATA_ELEMENT[$key][0]=='n') {
                            $this->_data[$key]	= substr($inp, 0, $this->DATA_ELEMENT[$key][1]);
                        }
                        else {
                            $this->_data[$key]	= ltrim(substr($inp, 0, $this->DATA_ELEMENT[$key][1]));
                        }
                        $this->_valid['de'][$key]	= true;
                        $inp	= substr($inp, $this->DATA_ELEMENT[$key][1], strlen($inp)-$this->DATA_ELEMENT[$key][1]);
                    }
                }
                //dynamic length
                else {
                    $len	= strlen($this->DATA_ELEMENT[$key][1]);
                    $tmp	= substr($inp, 0, $len);
                    if (strlen($tmp)==$len ) {
                        $num	= (integer) $tmp;
                        $inp	= substr($inp, $len, strlen($inp)-$len);
                    
                        $tmp2	= substr($inp, 0, $num);
                        if (strlen($tmp2)==$num) {
                            if ($this->DATA_ELEMENT[$key][0]=='n') {
                                $this->_data[$key]	= (double) $tmp2;
                            }
                            else {
                                $this->_data[$key]	= ltrim($tmp2);
                            }
                            $inp	= substr($inp, $num, strlen($inp)-$num);
                            $this->_valid['de'][$key]	= true;
                        }
                    }
                    
                }
            }
            else {
                if ($key>1) {
                    //fix length
                    if ($this->DATA_ELEMENT[$key][2]==0) {
                        $start	= false;
                        for ($i=0; $i<$this->DATA_ELEMENT[$key][1]/4; $i++) {                        
                            $bit	= base_convert($inp[$i], 16, 2);
                            
                            if ($bit!=0) $start	= true;
                            if ($start) $this->_data[$key]	.= $bit;
                        }
                        $this->_data[$key]	= $bit;
                    }
                }
                else {
                    $tmp	= substr($this->_iso, 4+16, 16);
                    if (strlen($tmp)==16) {
                        $this->_data[$key]	= substr($this->_iso, 4+16, 16);
                        $this->_valid['de'][$key]	= true;
                    }
                }
            }
            if (!$this->_valid['de'][$key]) $this->_valid['data']	= false;
          }
        }

        return $this->_data;
    }
    
    /* -----------------------------------------------------
        method
       ----------------------------------------------------- */

    //method: add data element
    public function addData($bit, $data) {
        if ($bit>1 && $bit<129 && $result = $this->_packElement($this->DATA_ELEMENT[$bit], $data)) {
            $this->_data[$bit]	= $result;
            ksort($this->_data);
            $this->_calculateBitmap();
        }
    }

    //method: add MTI
    public function addMTI($mti) {
        if (strlen($mti)==4 && ctype_digit($mti)) {
            $this->_mti	= $mti;
        }
    }	 
    

    //method: retrieve data element
    public function getData() {
        return $this->_data;
    }

    //method: retrieve bitmap
    public function getBitmap() {
        return $this->_bitmap;
    }

    //method: retrieve mti
    public function getMTI() {
        return $this->_mti;
    }

    //method: retrieve iso with all complete data
    public function getISO() {
        $this->_iso	= $this->_mti. $this->_bitmap. implode($this->_data);
        return $this->_iso;
    }
         
    //method: add ISO string
    public function addISO($iso) {
        $this->_clear();
        if ($iso!='') {
            $this->_iso	= $iso;    
            $this->_parseMTI();
            $this->_parseBitmap();
            $this->_parseData();            
        }
    }
    
    //method: return true if iso string is a valid 8583 format or false if not
    public function validateISO() {
        return $this->_valid['mti'] && $this->_valid['bitmap'] && $this->_valid['data'];
    }
    
    //method: remove existing data element
    public function removeData($bit) {
        if ($bit>1 && $bit<129) {
            unset($this->_data[$bit]);
            ksort($this->_data);            
            $this->_calculateBitmap();
        }
    }
    
    //method: redefine bit definition
    public function redefineBit($bit, $type, $length, $dynamic) {
        if ($bit>1 && $bit<129) {
            $this->DATA_ELEMENT[$bit] = array($type, $length, $dynamic);
        }
    }

}

?>