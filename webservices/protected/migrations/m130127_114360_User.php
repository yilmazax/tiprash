<?php
/**
*
*/
class m130127_114360_User extends CDbMigration
{



	public function up()
	{
		echo "m130127_114945_UserProfile  migration up.\n";
		$user='user';

        $this->createTable($user,
            array(
                'id' => 'pk',
// personel information
                'username' => 'string NOT NULL',
                'firstname' => 'string NOT NULL',
                'surname' => 'string NOT NULL',
                'birthdate' => 'datetime  NOT NULL',
                'createdat' => 'datetime  NOT NULL',
                'password' => 'string NOT NULL',
                'secretquestion' => 'integer  NOT NULL',
                'answer' => 'string NOT NULL',
                'permissiongroup' => 'integer  NOT NULL',
                'lastlogin_at'=>'datetime  NOT NULL',
                'about' => 'string',
                'gender' => 'int  NOT NULL',
                'religion' => 'int  NOT NULL',
                'politicalview' => 'string',
// Contact info

                'address' => 'string',
                'city' => 'string',
                'zip' => 'int  NOT NULL',
                'web_site' => 'string',

            )
        );
/*
	   $this->insert($user, array(
	        'id' => "1",
	        'name' => 'admin',
	        'surname' => 'xxx',
	        'password' => sha1("admin"),
	        'email_address' => 'XXX',
	        'birthdate' => date('Y-m-d H:i:s'),
	        'secret_question' => '1',
	        'answer' => 'string NOT NULL',
	        'permission_group' => '1',
	        'created_at'=>date('Y-m-d H:i:s'),
	        'last_login_at'=>date('Y-m-d H:i:s'),
            'zip' => 2,

	    ));

*/
	}

	public function down()
	{
        $user='user';
      
        $this->dropTable($user);
      
	}

}

?>


