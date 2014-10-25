<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Carbon\Carbon;

class addUser extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'tools:user';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = '-i: insert user to database -a: to activate a user';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */

    public function activateUser()
    {
        $email = $this->ask('E-mail:');
        $validator = Validator::make(
            array('email' => $email),
            array( 'email' => 'required|email')
        );
        if($validator->fails())
        {
            $this->error($validator->messages());
        }
        else
        {
            $user = User::where('email','=',$email)->firstOrFail();

            $user->activated = 1;
            $user->activated_at = Carbon::now();
            $user->save();

            $msg = "User ".$email." has been successfully updated at : ". $user->activated_at;
            $this->info($msg);
        }

    }
	public function getInfo()
	{
		$email = $this->ask('E-mail:');
		$first_name = $this->ask('First Name:');
		$last_name = $this->ask('Last Name:');
		$password = $this->secret('Password:');

		$validator = Validator::make(
			array(
			        'password' => $password,
			        'email' => $email
			    ),
			array(
        		
        		'password' => 'required|min:8',
        		'email' => 'required|email|unique:users'

    		)
		);


		if($validator->fails())
		{
			$this->error($validator->messages());
		}
		else
		{
			$user = new User;
			$user->email = $email;
			$user->first_name = $first_name;
			$user->last_name = $last_name;
			$user->password = Hash::make($password);
			$user->save();
			$msg = "Sucessfully added " . $user->sysname . " to the system";
			$this->info($msg);
		}

	}
	public function fire()
	{
		//
		if( $this->option('mode') == 'i' )
		{
			$this->getInfo();
		}
        if( $this->option('mode') == 'a' )
        {
            $this->activateUser();
        }
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('u', null,   InputOption::VALUE_OPTIONAL),
			array('p', null,   InputOption::VALUE_OPTIONAL)	
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(

			array('mode', null,   InputOption::VALUE_OPTIONAL),
			array('add',  null,   InputOption::VALUE_OPTIONAL),
			array('delete',  null,   InputOption::VALUE_OPTIONAL)
		);
	}

}
