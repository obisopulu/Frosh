<?php
//create reg_student_tb
$sql_tb_1 = "CREATE TABLE about (
  aboutID int(3) NOT NULL auto_increment,
  aboutSalutation varchar(50) NOT NULL,
  aboutTopic varchar(100) NOT NULL,
  aboutdetail varchar(500) NOT NULL,
  dateEdited varchar(8) NOT NULL,
  PRIMARY KEY  (aboutID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

)";
mysql_query ($sql_tb_1, $cxn) or die('fjhgvkjhbgkjbk');

$sql = "CREATE TABLE blog (
  blogID int(9) NOT NULL,
  blogTopic varchar(100) NOT NULL,
  blogDetails varchar(500) NOT NULL,
  blogPic varchar(1000) NOT NULL,
  blogDate varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

)";
mysql_query ($sql, $db_conn) or die('fjhgvkjhbgkjbk');

//create reg_subject_tb
$sql_tb_2 = "
CREATE TABLE stocks (
  stockID int(9) NOT NULL auto_increment,
  stockName char(100) NOT NULL,
  stockCategory char(20) NOT NULL,
  stockDescription varchar(300) NOT NULL,
  stockSize char(12) NOT NULL,
  stockPrice int(9) NOT NULL,
  stockPic varchar(1000) NOT NULL,
  dateEdited int(8) NOT NULL,
  PRIMARY KEY  (stockID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
mysql_query ($sql_tb_2, $cxn);

//create reg_v31_tb
$sql_tb_3 = "CREATE TABLE traffic (
  userid int(9) NOT NULL auto_increment COMMENT '1',
  userip char(100) NOT NULL,
  userdate int(10) NOT NULL,
  KEY userid (userid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
mysql_query ($sql_tb_3, $cxn);	
?>