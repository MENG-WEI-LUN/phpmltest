<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class testCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:command {name} {email} {--password=123}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
    public function handle()
    {
//    	if($this->option('name')){
//    		$this->info($this->argument('name').'=>'.$this->option('name'));
//	    }else{
//		    $this->info('把我顯示在畫面上'.$this->argument('msg').'=>'."meng");
//	    }
//	    $this->error('測試！！真的沒有東西出問題！');
//	    $this->line('把我顯示在畫面上');
	
//	    $headers = ['Name', 'Email'];
		
//	    $users = User::all(['username', 'email'])->toArray();
	
//	    $bar = $this->output->createProgressBar(count($users));
//
//	    foreach ($users as $user) {
//		    $bar->advance();
//	    }
//	    $bar->finish();
//	    $this->table($headers, $users);
	    DB::beginTransaction();
	    try{
		    //do something
		    
		    User::create(['name'=>$this->argument('name'),'email'=>$this->argument('email'),'password'=>$this->option('password')]);
		    
	    }catch (\Exception $e){
		    //reset data when transaction fail
		    DB::rollback();
		    $this->error('新增失敗了');
		    return redirect('/') -> with('danger', '更新失敗，請通知系統管理員');
	    }
	    //compelete transaction
	    DB::commit();
	    $this->info('新增成功');
    }
}
