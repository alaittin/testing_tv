<?php

$DBNAME   = 'tvfi_contao';
$server   = 'localhost';
$username = 'root';
$password = 'root';
if (!mysql_connect($server, $username, $password))
{
	 die("Could not connect to the DB please check username/password in data_transfer.php: ".mysql_error());
}
if (!mysql_select_db($DBNAME)){
	 die("Could not select DB please check DBNAME in data_transfer.php: ".mysql_error());
}




#########################################################################
#
/*   TRANSFER USER FROM utilisateur TTABLE TO tl_member TABLE   */

$link = mysqli_connect($server, $username, $password, $DBNAME);

$result = mysql_query("SELECT * FROM utilisateur_type");
while($row = mysql_fetch_assoc($result)) {
	mysql_query("INSERT INTO tl_member_group (id,name,tstamp) VALUES ( ".$row['utt_id'].",'".$row['utt_libelle']."',".time().") ");
}

$gender = array("1"=> "male", "2" => "female", "3" => "female");
$result1 = mysql_query("SELECT * FROM utilisateur");
$i = 0;
while($r = mysql_fetch_assoc($result1)) {
	$i = $i+1;
	$sql = "INSERT INTO tl_member 
		(id,tstamp,firstname,lastname,gender,company,street,country,phone,mobile,fax,email,groups,username,password,disable,login,stop,dateAdded,societevendeuse_id,departement,fonction) 
	VALUES(".$r['uti_id'].", ".time().",	'".mysql_real_escape_string($r['uti_prenom'])."',	'".mysql_real_escape_string($r['uti_nom'])."',
	'".$gender[$r['uti_titre']]."','".mysql_real_escape_string($r['uti_societe'])."','".mysql_real_escape_string($r['uti_adresse'])."',
	'".$r['uti_pys_id']."','".$r['uti_tel']."','".$r['uti_portable']."','".$r['uti_fax']."','".$r['uti_mail']."','".$r['uti_utt_id']."','".$r['uti_login']."',
	'".$r['uti_password']."','".($r['uti_valid']=="1" ? "" : "1")."','".($r['uti_valid']=="1" ? "1" : "0")."','".$r['uti_date_expiration']."','".time()."','".$r['uti_fsv_id']."',
	'".mysql_real_escape_string($r['uti_departement'])."','".mysql_real_escape_string($r['uti_fonction'])."') ";
	 
	if (!mysql_query($sql))
	{
		echo $sql."\n";
		die;
	}
}

#########################################################################

/* SET THE SOCIETE LINKS */

	$societes = mysql_query("select * from tl_tvfi_bdf_fo_societe_vendeuse"); #departementsocietevendeuse_id, fosocietevendeuse_id  ['']
	$i = 0;
	while($r = mysql_fetch_assoc($societes)) 
	{
		// We want to transfer only valid(entered) links not all 
		if (str_replace(" ", "", $r['fsv_web']) != "") #		if ($r['fsv_web'] =~ /\w/) #=~ m/\S.*\S/
		{
			mysql_query("insert into tl_tvfi_bdf_fo_societe_vendeuse_link (`pid`,`published`,`url`) VALUES (".$r['id'].",1,'".$r['fsv_web']."')");
		}
	}
	mysql_query("UPDATE tl_tvfi_bdf_fo_societe_vendeuse_link SET tstamp =  UNIX_TIMESTAMP(NOW())");
	mysql_query("UPDATE tl_tvfi_bdf_fo_societe_vendeuse_link SET tstamp_creation =  UNIX_TIMESTAMP(NOW())");
	mysql_query("ALTER TABLE tl_tvfi_bdf_fo_societe_vendeuse DROP fsv_web");
	
		
#########################################################################

/* SET THE DEPARTEMENT CONTACT RELATION */

$depts = mysql_query("select * from tl_tvfi_bdf_departement");

$department = array();
while($r = mysql_fetch_assoc($depts)) 
{
	$department[] = $r;
}
# delete from tl_tvfi_bdf_departement and enter new data
mysql_query("select * from tl_tvfi_bdf_departement");

$conts = mysql_query("select * from tl_tvfi_bdf_contact"); 
$i = 0;
while($r = mysql_fetch_assoc($conts)) 
{
	$department_id = 0;
	$exist = mysql_query("select * from tl_tvfi_bdf_departement where pid='".$r['fosocietevendeuse_id']."' AND dvr_nom_fr='".$department[$r['departementsocietevendeuse_id']]['dvr_nom_fr']."' limit 1");
	if (mysql_num_rows($exist) == 0) 
	{
		mysql_query("insert into tl_tvfi_bdf_departement (`pid`,`published`,`dvr_nom_fr`,`dvr_nom_en`,`dvr_nom_es`) VALUES (".$r['fosocietevendeuse_id'].",1,'".$department[$r['departementsocietevendeuse_id']]['dvr_nom_fr']."', '".$department[$r['departementsocietevendeuse_id']]['dvr_nom_en']."','".$department[$r['departementsocietevendeuse_id']]['dvr_nom_es']."')");		

		$department_id =  mysql_insert_id();
		
	}
	else 
	{
		$r2 = mysql_fetch_assoc($exist);
		$department_id =  $r2['id'];

	}
	mysql_query("update tl_tvfi_bdf_contact set departementsocietevendeuse_id=".$department_id." where id=".$r['id']);
	
}	
mysql_query("UPDATE tl_tvfi_bdf_departement SET tstamp =  UNIX_TIMESTAMP(NOW())");
mysql_query("UPDATE tl_tvfi_bdf_departement SET tstamp_creation =  UNIX_TIMESTAMP(NOW())");
mysql_query("ALTER TABLE tl_tvfi_bdf_contact DROP fosocietevendeuse_id");



#########################################################################

/*   ELIMINE DUBLICATION IN tl_tvfi_bdf_fo_societe_vendeuse_to_type TABLE  (SOCIETE TYPE) */

$result = mysql_query("SELECT * FROM tl_tvfi_bdf_fo_societe_vendeuse_to_type  where 1=1 group by typefosocietevendeuse_id, fosocietevendeuse_id");
while($r = mysql_fetch_assoc($result)) {
	mysql_query("delete from tl_tvfi_bdf_fo_societe_vendeuse_to_type where id !=".$r['id']." AND typefosocietevendeuse_id=".$r['typefosocietevendeuse_id']." AND fosocietevendeuse_id=".$r['fosocietevendeuse_id']);			
}


?>