<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class restapi_model extends CI_Model
{
   
    public function signUp($name, $email, $password,$contact)
    {
        $password = md5($password);
         $query1=$this->db->query("SELECT `id` FROM `user` WHERE `email`='$email'");
				$num=$query1->num_rows();
        if($num == 0)
        {
            $query = $this->db->query('INSERT INTO `user`( `name`, `email`, `password`,`contact`,`logintype`,`accesslevel`,`status`) VALUES ('.$this->db->escape($name).','.$this->db->escape($email).','.$this->db->escape($password).','.$this->db->escape($contact).",'Email','3','1')");
            $id = $this->db->insert_id();
          $newdata = $this->db->query('SELECT  `user`.`id`, `user`.`name`, `user`.`email`, `user`.`accesslevel`, `user`.`timestamp`, `user`.`status`, `user`.`image`, `user`.`username`, `user`.`socialid`, `user`.`logintype`, `user`.`address`, `user`.`contact`, `user`.`dob`, `user`.`street`, `user`.`city`, `user`.`state`, `user`.`country`, `user`.`pincode`, `user`.`facebook`, `user`.`google`, `user`.`twitter`, `user`.`website`, `user`.`forgotpassword`, `user`.`coverimage`, `user`.`about`, `user`.`hobbies`, `user`.`profession`,`userimages`.`image` FROM `user` LEFT OUTER JOIN `userimages` ON `userimages`.`user`=`user`.`id` WHERE `user`.`id`=('.$this->db->escape($id).')')->row();
            if (!$query) {
                return false;
            } else {
                return $newdata;
            }
       
    }
        else{
        return false;
        }
    }
    public function signIn($email, $password)
    {
        $password = md5($password);
        $query = $this->db->query('SELECT `id` FROM `user` WHERE `email`=('.$this->db->escape($email).') AND `password`= ('.$this->db->escape($password).')');
        if ($query->num_rows > 0) {
            $user = $query->row();
            $user = $user->id;
            $query1 = $this->db->query("UPDATE `user` SET `forgotpassword`='' WHERE `email`=(".$this->db->escape($email).')');
           $newdata = $this->db->query('SELECT  `id`, `name`, `email`, `accesslevel`, `timestamp`, `status`, `image`, `username`, `socialid`, `logintype`, `address`, `contact`, `dob`, `street`, `city`, `state`, `country`, `pincode`, `facebook`, `google`, `twitter`, `website`, `forgotpassword`, `coverimage`, `about`, `hobbies`, `profession` FROM `user` WHERE `id`=('.$this->db->escape($user).')')->row();
            $this->session->set_userdata($newdata);
            //print_r($newdata);
            return $newdata;
        } elseif ($query->num_rows == 0) {
            $query3 = $this->db->query('SELECT `id` FROM `user` WHERE `email`=('.$this->db->escape($email).') AND `forgotpassword`= ('.$this->db->escape($password).')');
            if ($query3->num_rows > 0) {
                $user = $query3->row();
                $user = $user->id;
                $query1 = $this->db->query("UPDATE `user` SET `forgotpassword`='',`password`=(".$this->db->escape($password).') WHERE `email`=('.$this->db->escape($email).')');
                $newdata = $this->db->query('SELECT  `user`.`id`, `user`.`name`, `user`.`email`, `user`.`accesslevel`, `user`.`timestamp`, `user`.`status`, `user`.`image`, `user`.`username`, `user`.`socialid`, `user`.`logintype`, `user`.`address`, `user`.`contact`, `user`.`dob`, `user`.`street`, `user`.`city`, `user`.`state`, `user`.`country`, `user`.`pincode`, `user`.`facebook`, `user`.`google`, `user`.`twitter`, `user`.`website`, `user`.`forgotpassword`, `user`.`coverimage`, `user`.`about`, `user`.`hobbies`, `user`.`profession`,`userimages`.`image` FROM `user` LEFT OUTER JOIN `userimages` ON `userimages`.`user`=`user`.`id` WHERE `user`.`id`=('.$this->db->escape($user).')')->row();

                $this->session->set_userdata($newdata);
                    //print_r($newdata);
                    return $newdata;
            } else {
                return false;
            }
        }
    }
    public function editProfile($id, $name, $email,$contact,$address, $website,  $dob,$image)
    {
        $dob = strtotime($dob);
        $dob=date("Y-m-d", $dob);
         $query = $this->db->query('UPDATE `user`
 SET `name` = '.$this->db->escape($name).', `email` = '.$this->db->escape($email).',`dob` = '.$this->db->escape($dob).',`contact` = '.$this->db->escape($contact).',`address` = '.$this->db->escape($address).',`website` = '.$this->db->escape($website).',`image` = '.$this->db->escape($image).'
 WHERE id = ('.$this->db->escape($id).')');

     $query1 = $this->db->query('SELECT  `user`.`id`, `user`.`name`, `user`.`email`, `user`.`accesslevel`, `user`.`timestamp`, `user`.`status`, `user`.`image`, `user`.`username`, `user`.`socialid`, `user`.`logintype`, `user`.`address`, `user`.`contact`, `user`.`dob`, `user`.`street`, `user`.`city`, `user`.`state`, `user`.`country`, `user`.`pincode`, `user`.`facebook`, `user`.`google`, `user`.`twitter`, `user`.`website`, `user`.`forgotpassword`, `user`.`coverimage`, `user`.`about`, `user`.`hobbies`, `user`.`profession`,`userimages`.`image` FROM `user` LEFT OUTER JOIN `userimages` ON `userimages`.`user`=`user`.`id` WHERE `user`.`id`=('.$this->db->escape($id).')')->row();
        if ($query) {
            return  $query1;
        } else {
            return  0;
        }
    }
    public function getuserdetails($id){
    
        $query = $this->db->query('SELECT `id`, `name`, `password`, `email`, `accesslevel`, `timestamp`, `status`, `image`, `username`, `socialid`, `logintype`, `address`, `contact`, `dob`, `street`, `city`, `state`, `country`, `pincode`, `facebook`, `google`, `twitter`, `website`, `forgotpassword`, `coverimage`, `about`, `hobbies`, `profession` FROM `user` WHERE `id`=('.$this->db->escape($id).')')->row();
        $query->images=$this->db->query('SELECT `image` FROM `userimages` WHERE `user`=('.$this->db->escape($id).')')->result();
        return $query;
    }
    
    public function changePassword($id, $oldpassword, $newpassword, $confirmpassword) {
        $oldpassword = md5($oldpassword);
        $newpassword = md5($newpassword);
        $confirmpassword = md5($confirmpassword);
        if ($newpassword == $confirmpassword) {
            $useridquery = $this->db->query("SELECT `id` FROM `user` WHERE `password`='$oldpassword'");
            if ($useridquery->num_rows() == 0) {
                return 0;
            } else {
                $query = $useridquery->row();
                $userid = $query->id;
                $updatequery = $this->db->query("UPDATE `user` SET `password`='$newpassword' WHERE `id`='$userid'");
                return 1;
            }
        } else {
//            echo "New password and confirm password do not match!!!";
			return -1;
        }
    }
    public function updateProfileImage($imageName, $userid)
    {
        $query = $this->db->query('UPDATE `user`
 SET `image` = '.$this->db->escape($imageName).'
 WHERE id = ('.$this->db->escape($userid).')');
        if (!$query) {
            return 0;
        } else {
            return $query;
        }
    }
    public function updateCoverImage($imageName, $userid)
    {
        $query = $this->db->query('UPDATE `user`
 SET `coverimage` = '.$this->db->escape($imageName).'
 WHERE id = ('.$this->db->escape($userid).')');
        if (!$query) {
            return 0;
        } else {
            return $query;
        }
    }
    
    public function getyoutubedetails($details){
            $query = $this->db->query('TRUNCATE TABLE `playlist`');
            foreach ($details as $key => $value) 
            { 
            $data=array("playlist" => $key,"channelid" => $value);
            $query=$this->db->insert( "playlist", $data );
            }
            if(!$query)
            return  0;
            else
            return  1;
    }
    
    public function getConfigDetails(){
            $query=$this->db->query("SELECT `config`.`id`, `config`.`about`, `config`.`hobbies`, `config`.`coverimage`, `config`.`fbusername`, `config`.`instausername`, `config`.`channelid`, `config`.`name`,`playlist`.`id` as `playlistid`,`playlist`.`playlist`,`playlist`.`channelid` as `channelidname` FROM `config` LEFT OUTER JOIN `playlist` ON `playlist`.`id`=`config`.`channelid` WHERE 1")->row();
             $query->row=$this->db->query("SELECT `id`, `user`, `image` FROM `userimages` WHERE 1")->result();
        return $query;
    }
  
}
