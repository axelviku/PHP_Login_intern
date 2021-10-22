# PHP_Login_intern
1st page index.php
2nd page login.php
3rd page home.php
4th is dbFunction to call in all above work.

Database creation use this code

CREATE TABLE IF NOT EXISTS `users` (  
  `id` int(11) NOT NULL AUTO_INCREMENT,  
  `username` varchar(30) NOT NULL,  
  `emailid` varchar(30) NOT NULL,  
  `password` varchar(30) NOT NULL,  
   PRIMARY KEY (`id`)  
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;
