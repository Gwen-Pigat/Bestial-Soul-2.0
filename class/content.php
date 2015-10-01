<?php 

class Content{

	public static $tag;
	public static $class;
	public static $id;

	public function withZero($objet){
		if ($objet < 10) {
			return '0'.$objet;
		} 
		else{
			return $objet;
		}
	}

	private function input($class, $name, $placeholder, $value){
			
		return '<input class="'.$class.'" type="text" name="'.$name.'" value="'.$value.'" placeholder="'.$placeholder.'" required />';
	} 

	private function submit($class, $value, $name){
			
		if ($name != "") {
		return '<input class="'.$class.'" type="submit" name="'.$name.'" value="'.$value.'" />';
		}
		else{
		return '<input class="'.$class.'" type="submit" value="'.$value.'" />';	
		}
	} 

	private function balise($content, $tag, $class, $id){
		if ($class != "" && $id == "") {
		return '
		<'.$tag.' class="'.$class.'">'.$content.'</'.$tag.'>
		';	
		}
		elseif ($id != "" && $class == "") {
		return '
		<'.$tag.' id="'.$id.'">'.$content.'</'.$tag.'>
		';	
		}
		elseif ($class != "" && $id != "") {
		return '
		<'.$tag.' class="'.$class.'" id="'.$id.'">'.$content.'</'.$tag.'>
		';	
		}
		else{
		return '
		<'.$tag.'>'.$content.'</'.$tag.'>
		';	
		}
	
	}

	private function icons($class){
		
		return '<i class="'.$class.'"></i>';	
	
	}

	private function select($class, $name){
		
		return '
		<select class="'.$class.'" name="'.$name.'">
		';	
	
	}

	private function modal($id, $title, $arg){

		if ($arg == 1) {
			return '
			<div id="'.$id.'" class="modal fade" role="dialog">'
			  .self::setOpenTag("div","modal-dialog")
			  	.self::setOpenTag("div","modal-content")
			  		.self::setOpenTag("div","modal-header").
			        '<button type="button" class="close" data-dismiss="modal">'.self::setIcon("fa fa-times fa-2x").'</button>'
			        .self::setContent($title, "h2","modal-title")
			      .self::setCloseTag("div")
			      .self::setOpenTag("div","modal-body")
			       .self::setForm("submit_email","php/redirect_master.php?interest=$_GET[id]","POST")
        				.self::setInput("col-md-6 col-md-offset-3","email","Votre adresse e-mail")
        				.self::setSubmit("btn btn-success col-md-4 col-md-offset-4","Envoyer")
        			.self::setCloseTag("form")
			      .self::setCloseTag("div")
			      .self::setOpenTag("div","modal-footer")
			       
			      .self::setCloseTag("div")
			    .self::setCloseTag("div")

			  .self::setCloseTag("div")
			.self::setCloseTag("div")
			;
		}

	}

	private function option($value, $content, $default, $id){
		if (isset($default) && isset($id)) {
		return '
		<option selected="true" disabled="disabled" id="'.$id.'">'.$content.'</option>
		';	
		}
		elseif (isset($default) && !isset($id)) {
		return '
		<option selected="true" disabled="disabled">'.$content.'</option>
		';	
		}
		else{
		return '
		<option value="'.$value.'">'.$content.'</option>
		';	
		}
	
	}

	private function openTag($tag, $class, $id){

		if ($id != "" && $class == "") {
		return '
		<'.$tag.' id="'.$id.'">
		';
		}
		elseif ($class != "" && $id == "") {
		return '
		<'.$tag.' class="'.$class.'">
		';
		}
		elseif ($id != "" && $class != "") {
		return '
		<'.$tag.' class="'.$class.'" id="'.$id.'">
		';
		}

		return '
		<'.$tag.'>
		';

	}

	private function closeTag($tag){
	
	return '
	</'.$tag.'>
	';

	}

	private function link($href, $content, $target){
		if (!isset($target)) {
		return '
		<a href="'.$href.'">'.$content.'</a>
		';
		}
		else{
		return '
		<a target="_blank" href="'.$href.'">'.$content.'</a>
		';
		}	
	}

	private function image($class, $src, $align){
		return '
		<img class="'.$class.'" src="'.$src.'" align="'.$align.'" />
		';
	}

	private function mail($id){
		if ($id == "user") {
			return "<body style='color: #6D6E72'>
        <div style='padding: 5%; font-family: caviar; background-color: #E7E7E7; color: #6d6e72'>
          <div style='background-color: white; padding: 4%'>
            <h1 style='color: #ff0000; text-align: center; margin: 0% ; font-family: Verdana; font-size: 4vw'>Edgar Club</h1>
            <h2 style='color: #000; text-align: center; margin: 0% ; font-family: Verdana; font-size: 2vw'>Votre inscription</h2>
            <p style='text-align: justify ;color: #6D6E72; Margin-top: 7%; font-family: -webkit-body; font-size: 1.3vw'><strong>Nous avons bien recu votre demande, et celle-ci sera traité dans les plus brefs délais. Voici les informations que vous nous avez laissées lors de votre inscription : </strong></p>
            <div style='text-align: justify; padding: 2%; Margin-top: 4%; color: #6d6e72; font-size: 1.3vw'>- Nom : $nom <br>
            - Prénom : $prenom <br>
            - Email : $email <br>
            - Téléphone : $telephone <br>
            - Ville : $city <br>
            - Vous avez connu le site par : $test <br>
            </div>
          </div>
        </div>
      </body>";
		}
		if ($id == "Admin") {
			return "<body style='color: #6D6E72'>
      <div style='padding: 5%; font-family: caviar; background-color: #E7E7E7; color: #6d6e72'>
        <div style='background-color: white; padding: 4%'>
          <h1 style='color: #ff0000; text-align: center; margin: 0% ; font-family: Verdana; font-size: 4vw'>Edgar Club</h1>
          <h2 style='color: #000; text-align: center; margin: 0% ; font-family: Verdana; font-size: 2vw'>Devenir Edgar - Nouveau postulant</h2>
          <p style='text-align: justify ;color: #6D6E72; Margin-top: 7%; font-family: -webkit-body; font-size: 1.3vw'><strong>Une nouvelle personne souhaite devenir Edgar, vous trouverez ci dessous ses informations.</strong></p>
  
          <div style='text-align: justify; padding: 2%; Margin-top: 4%; color: #6d6e72; font-size: 1.3vw'>- Nom : $nom <br />
          - Prénom : $prenom <br />
          - Email : $email <br />
          - Téléphone : $telephone <br />
          - Ville : $city <br />
          - Connu le site par : $test <br /></div>

          <p style='text-align: center; padding: 2%; border: 1px #C5C5C5 solid; Box-shadow: 0 0 10px 1px #C5C5C5; Margin-top: 3%; color: #6d6e72; font-size: 1.3vw'>Guillaume :<br /><a href='' style='font-size: 1vw'>http://www.edgarclub.com/index.php?token_access=8cs7tae2amt14c9m6oavlnu035&identifiant=Guillaume</a></p>
          <p style='text-align: center; padding: 2%; border: 1px #C5C5C5 solid; Box-shadow: 0 0 10px 1px #C5C5C5; Margin-top: 3%; color: #6d6e72; font-size: 1.3vw'>Jean-carles :<br /><a href='' style='font-size: 1vw'>http://www.edgarclub.com/index.php?token_access=8cs7tae2amt14c9m6oavlnu035&identifiant=Jean-carles</a></p>
        </div>
      </div>
      </body>";
		}
	}

	public function sendMail($id){
		return self::mail($id);
	}

	private function form($class, $action, $method, $enctype){
		if ($enctype) {
			return '<form class="'.$class.'" action="'.$action.'" method="'.$method.'" enctype="multipart/form-data">';
		}
		else{
			return '<form class="'.$class.'" action="'.$action.'" method="'.$method.'">';
		}
	}

	private function iframe($src, $class, $frame, $allow){
		if (isset($frameborder)) {
			return '<iframe class="'.$class.'" src="'.$src.'" frameborder="'.$frame.'"></iframe>';
		}
		if (isset($frameborder) && isset($allow)) {
			return '<iframe class="'.$class.'" src="'.$src.'" frameborder="'.$frame.'" allowfullscreen></iframe>';
		}
		else{
			return '<iframe class="'.$class.'" src="'.$src.'"></iframe>';
		}
	}


	// Setters

	public static function setInput($class, $name, $placeholder, $value){
		return self::input($class, $name, $placeholder, $value);
	}

	public static function setFrame($src, $class, $frame, $allow){
		return self::iframe($src, $class, $frame, $allow);
	}

	public static function setModal($id, $title, $arg){
		return self::modal($id, $title, $arg);
	}

	public static function setSelect($class, $name){
		return self::select($class, $name);
	}

	public static function setOption($value, $content, $default, $id){
		return self::option($value, $content, $default, $id);
	}

	public static function setForm($class, $action, $method, $enctype){
		return self::form($class, $action, $method, $enctype);
	}

	public static function setSubmit($class, $value, $name){
		return self::submit($class, $value, $name);
	}

	public static function setContent($content, $tag, $class, $id){
		return self::balise($content, $tag, $class, $id);
	}

	public static function setLink($href, $content, $target){
		return self::link($href, $content, $target);
	}

	public static function setImg($class, $src, $align){
		return self::image($class, $src, $align);
	}

	public static function setOpenTag($tag, $class, $id){
		return self::openTag($tag, $class, $id);
	}

	public static function setIcon($class){
		return self::icons($class);
	}

	public static function setCloseTag($tag){
		return self::closeTag($tag);
	}


	// 


	public function verifForm($method, $objet){

		if (isset($method) && isset($method[$objet]) && !empty($method[$objet])) {
			$link->query("INSERT INTO Dolls(email) VALUES $objet") or die("Erreur query");
			self::refresh(0,"index.php","Mail enregistré, nous vous recontactons au plus vite");
		}

	}

	public static function getTime(){
		$day = date("Y/m/d"); $hour = date("H:i:s"); $time = 'Le '.$day.' à '.$hour;
		return $time;
	}


	public static function refresh($time, $location, $alert){
		if ($alert) {
			echo "<script>alert(\"$alert\")</script>";
		}
		header("Refresh: $time;url=$location");
	}

}

 ?>