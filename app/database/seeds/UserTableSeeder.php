<?php
class UserTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'imei_no' => '45785961123345785',
			'temp1' => '25.01',
			'temp2' => '20.0'));
	}
}
?>