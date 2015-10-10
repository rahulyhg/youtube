<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");
class Json extends CI_Controller 
{function getalllatestvideos()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`youtube_latestvideos`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`youtube_latestvideos`.`order`";
$elements[1]->sort="1";
$elements[1]->header="Order";
$elements[1]->alias="order";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`youtube_latestvideos`.`status`";
$elements[2]->sort="1";
$elements[2]->header="Status";
$elements[2]->alias="status";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`youtube_latestvideos`.`url`";
$elements[3]->sort="1";
$elements[3]->header="Url";
$elements[3]->alias="url";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`youtube_latestvideos`.`image`";
$elements[4]->sort="1";
$elements[4]->header="Image";
$elements[4]->alias="image";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`youtube_latestvideos`.`timestamp`";
$elements[5]->sort="1";
$elements[5]->header="Timestamp";
$elements[5]->alias="timestamp";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `youtube_latestvideos`");
$this->load->view("json",$data);
}
public function getsinglelatestvideos()
{
$id=$this->input->get_post("id");
$data["message"]=$this->latestvideos_model->getsinglelatestvideos($id);
$this->load->view("json",$data);
}
function getallpickedvideos()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`youtube_pickedvideos`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`youtube_pickedvideos`.`status`";
$elements[1]->sort="1";
$elements[1]->header="Status";
$elements[1]->alias="status";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`youtube_pickedvideos`.`url`";
$elements[2]->sort="1";
$elements[2]->header="Url";
$elements[2]->alias="url";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`youtube_pickedvideos`.`image`";
$elements[3]->sort="1";
$elements[3]->header="Image";
$elements[3]->alias="image";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`youtube_pickedvideos`.`timestamp`";
$elements[4]->sort="1";
$elements[4]->header="Timestamp";
$elements[4]->alias="timestamp";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `youtube_pickedvideos`");
$this->load->view("json",$data);
}
public function getsinglepickedvideos()
{
$id=$this->input->get_post("id");
$data["message"]=$this->pickedvideos_model->getsinglepickedvideos($id);
$this->load->view("json",$data);
}
function getallevents()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`youtube_events`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`youtube_events`.`status`";
$elements[1]->sort="1";
$elements[1]->header="Status";
$elements[1]->alias="status";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`youtube_events`.`name`";
$elements[2]->sort="1";
$elements[2]->header="Name";
$elements[2]->alias="name";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`youtube_events`.`venue`";
$elements[3]->sort="1";
$elements[3]->header="Venue";
$elements[3]->alias="venue";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`youtube_events`.`image`";
$elements[4]->sort="1";
$elements[4]->header="Image";
$elements[4]->alias="image";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`youtube_events`.`url`";
$elements[5]->sort="1";
$elements[5]->header="Url";
$elements[5]->alias="url";

$elements=array();
$elements[6]=new stdClass();
$elements[6]->field="`youtube_events`.`starttime`";
$elements[6]->sort="1";
$elements[6]->header="Start Time";
$elements[6]->alias="starttime";

$elements=array();
$elements[7]=new stdClass();
$elements[7]->field="`youtube_events`.`timestamp`";
$elements[7]->sort="1";
$elements[7]->header="Timestamp";
$elements[7]->alias="timestamp";

$elements=array();
$elements[8]=new stdClass();
$elements[8]->field="`youtube_events`.`content`";
$elements[8]->sort="1";
$elements[8]->header="Content";
$elements[8]->alias="content";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `youtube_events`");
$this->load->view("json",$data);
}
public function getsingleevents()
{
$id=$this->input->get_post("id");
$data["message"]=$this->events_model->getsingleevents($id);
$this->load->view("json",$data);
}
function getallblogs()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`youtube_blogs`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`youtube_blogs`.`order`";
$elements[1]->sort="1";
$elements[1]->header="Order";
$elements[1]->alias="order";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`youtube_blogs`.`status`";
$elements[2]->sort="1";
$elements[2]->header="Status";
$elements[2]->alias="status";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`youtube_blogs`.`name`";
$elements[3]->sort="1";
$elements[3]->header="Name";
$elements[3]->alias="name";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`youtube_blogs`.`image`";
$elements[4]->sort="1";
$elements[4]->header="Image";
$elements[4]->alias="image";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`youtube_blogs`.`url`";
$elements[5]->sort="1";
$elements[5]->header="Url";
$elements[5]->alias="url";

$elements=array();
$elements[6]=new stdClass();
$elements[6]->field="`youtube_blogs`.`timestamp`";
$elements[6]->sort="1";
$elements[6]->header="Timestamp";
$elements[6]->alias="timestamp";

$elements=array();
$elements[7]=new stdClass();
$elements[7]->field="`youtube_blogs`.`content`";
$elements[7]->sort="1";
$elements[7]->header="Content";
$elements[7]->alias="content";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `youtube_blogs`");
$this->load->view("json",$data);
}
public function getsingleblogs()
{
$id=$this->input->get_post("id");
$data["message"]=$this->blogs_model->getsingleblogs($id);
$this->load->view("json",$data);
}
function getallphotogallerycategory()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`youtube_photogallerycategory`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`youtube_photogallerycategory`.`order`";
$elements[1]->sort="1";
$elements[1]->header="Order";
$elements[1]->alias="order";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`youtube_photogallerycategory`.`status`";
$elements[2]->sort="1";
$elements[2]->header="Status";
$elements[2]->alias="status";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`youtube_photogallerycategory`.`name`";
$elements[3]->sort="1";
$elements[3]->header="Name";
$elements[3]->alias="name";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`youtube_photogallerycategory`.`image`";
$elements[4]->sort="1";
$elements[4]->header="Image";
$elements[4]->alias="image";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`youtube_photogallerycategory`.`timestamp`";
$elements[5]->sort="1";
$elements[5]->header="Timestamp";
$elements[5]->alias="timestamp";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `youtube_photogallerycategory`");
$this->load->view("json",$data);
}
public function getsinglephotogallerycategory()
{
$id=$this->input->get_post("id");
$data["message"]=$this->photogallerycategory_model->getsinglephotogallerycategory($id);
$this->load->view("json",$data);
}
function getallphotogallery()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`youtube_photogallery`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`youtube_photogallery`.`photogallerycategory`";
$elements[1]->sort="1";
$elements[1]->header="Photo Gallery Category";
$elements[1]->alias="photogallerycategory";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`youtube_photogallery`.`order`";
$elements[2]->sort="1";
$elements[2]->header="Order";
$elements[2]->alias="order";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`youtube_photogallery`.`status`";
$elements[3]->sort="1";
$elements[3]->header="Status";
$elements[3]->alias="status";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`youtube_photogallery`.`image`";
$elements[4]->sort="1";
$elements[4]->header="Image";
$elements[4]->alias="image";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`youtube_photogallery`.`timestamp`";
$elements[5]->sort="1";
$elements[5]->header="Timestamp";
$elements[5]->alias="timestamp";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `youtube_photogallery`");
$this->load->view("json",$data);
}
public function getsinglephotogallery()
{
$id=$this->input->get_post("id");
$data["message"]=$this->photogallery_model->getsinglephotogallery($id);
$this->load->view("json",$data);
}
function getallvideogallerycategory()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`youtube_videogallerycategory`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`youtube_videogallerycategory`.`status`";
$elements[1]->sort="1";
$elements[1]->header="Status";
$elements[1]->alias="status";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`youtube_videogallerycategory`.`order`";
$elements[2]->sort="1";
$elements[2]->header="Order";
$elements[2]->alias="order";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`youtube_videogallerycategory`.`name`";
$elements[3]->sort="1";
$elements[3]->header="Name";
$elements[3]->alias="name";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`youtube_videogallerycategory`.`subtitle`";
$elements[4]->sort="1";
$elements[4]->header="Sub Title";
$elements[4]->alias="subtitle";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`youtube_videogallerycategory`.`url`";
$elements[5]->sort="1";
$elements[5]->header="Url";
$elements[5]->alias="url";

$elements=array();
$elements[6]=new stdClass();
$elements[6]->field="`youtube_videogallerycategory`.`timestamp`";
$elements[6]->sort="1";
$elements[6]->header="Timestamp";
$elements[6]->alias="timestamp";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `youtube_videogallerycategory`");
$this->load->view("json",$data);
}
public function getsinglevideogallerycategory()
{
$id=$this->input->get_post("id");
$data["message"]=$this->videogallerycategory_model->getsinglevideogallerycategory($id);
$this->load->view("json",$data);
}
function getallvideogallery()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`youtube_videogallery`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`youtube_videogallery`.`videogallerycategory`";
$elements[1]->sort="1";
$elements[1]->header="Video Gallery Category";
$elements[1]->alias="videogallerycategory";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`youtube_videogallery`.`status`";
$elements[2]->sort="1";
$elements[2]->header="Status";
$elements[2]->alias="status";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`youtube_videogallery`.`order`";
$elements[3]->sort="1";
$elements[3]->header="Order";
$elements[3]->alias="order";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`youtube_videogallery`.`url`";
$elements[4]->sort="1";
$elements[4]->header="Url";
$elements[4]->alias="url";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`youtube_videogallery`.`timestamp`";
$elements[5]->sort="1";
$elements[5]->header="Timestamp";
$elements[5]->alias="timestamp";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `youtube_videogallery`");
$this->load->view("json",$data);
}
public function getsinglevideogallery()
{
$id=$this->input->get_post("id");
$data["message"]=$this->videogallery_model->getsinglevideogallery($id);
$this->load->view("json",$data);
}
function getallnotification()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`youtube_notification`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`youtube_notification`.`status`";
$elements[1]->sort="1";
$elements[1]->header="Status";
$elements[1]->alias="status";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`youtube_notification`.`order`";
$elements[2]->sort="1";
$elements[2]->header="Order";
$elements[2]->alias="order";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`youtube_notification`.`name`";
$elements[3]->sort="1";
$elements[3]->header="Name";
$elements[3]->alias="name";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`youtube_notification`.`link`";
$elements[4]->sort="1";
$elements[4]->header="Link";
$elements[4]->alias="link";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`youtube_notification`.`timestamp`";
$elements[5]->sort="1";
$elements[5]->header="Timestamp";
$elements[5]->alias="timestamp";

$elements=array();
$elements[6]=new stdClass();
$elements[6]->field="`youtube_notification`.`content`";
$elements[6]->sort="1";
$elements[6]->header="Content";
$elements[6]->alias="content";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `youtube_notification`");
$this->load->view("json",$data);
}
public function getsinglenotification()
{
$id=$this->input->get_post("id");
$data["message"]=$this->notification_model->getsinglenotification($id);
$this->load->view("json",$data);
}
function getallfeedback()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`youtube_feedback`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`youtube_feedback`.`name`";
$elements[1]->sort="1";
$elements[1]->header="Name";
$elements[1]->alias="name";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`youtube_feedback`.`email`";
$elements[2]->sort="1";
$elements[2]->header="Email";
$elements[2]->alias="email";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`youtube_feedback`.`timestamp`";
$elements[3]->sort="1";
$elements[3]->header="Timestamp";
$elements[3]->alias="timestamp";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`youtube_feedback`.`content`";
$elements[4]->sort="1";
$elements[4]->header="Content";
$elements[4]->alias="content";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `youtube_feedback`");
$this->load->view("json",$data);
}
public function getsinglefeedback()
{
$id=$this->input->get_post("id");
$data["message"]=$this->feedback_model->getsinglefeedback($id);
$this->load->view("json",$data);
}
function getallenquiry()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`youtube_enquiry`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`youtube_enquiry`.`user`";
$elements[1]->sort="1";
$elements[1]->header="User";
$elements[1]->alias="user";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`youtube_enquiry`.`name`";
$elements[2]->sort="1";
$elements[2]->header="Name";
$elements[2]->alias="name";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`youtube_enquiry`.`email`";
$elements[3]->sort="1";
$elements[3]->header="Email";
$elements[3]->alias="email";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`youtube_enquiry`.`timestamp`";
$elements[4]->sort="1";
$elements[4]->header="Timestamp";
$elements[4]->alias="timestamp";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`youtube_enquiry`.`content`";
$elements[5]->sort="1";
$elements[5]->header="Content";
$elements[5]->alias="content";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `youtube_enquiry`");
$this->load->view("json",$data);
}
public function getsingleenquiry()
{
$id=$this->input->get_post("id");
$data["message"]=$this->enquiry_model->getsingleenquiry($id);
$this->load->view("json",$data);
}
} ?>