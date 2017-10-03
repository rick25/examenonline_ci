namespace Helloci;
 
class Hello
{
 public function __get( $var )
 {
 return get_instance()->$var;
 }
 
 public function hi()
 {
 $this->load-library("session");
 $this->session->set_userdata("name", "Iparra");
 echo $this->session->userdata("name");
 }
}