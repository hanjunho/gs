@servers(['web' => 'dev@ec2-52-87-187-112.compute-1.amazonaws.com'])

@task('deploy')
    cd /path/to/site
    git pull origin master
@endtask
