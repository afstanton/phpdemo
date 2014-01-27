## phpdemo app

This php app is using the Laravel framework, written over a busy weekend. I'll probably continue to tinker with it over time.

This is intended to be the beginning of a web app for grading. There are four roles: Teacher, Student, Parent, and Admin. There are Courses and there are Grades. A Course has one Teacher and many Students. A Parent has many Students and vice versa. A Grade maps a Student to a Course and has a value.

There's supposed to be a dashboard to let people see grades for the students they are supposed to have access to. I haven't had time for that yet. There's a lot here I haven't had time for yet.

You will very likely to need to ensure app/storage has the most liberal permissions possible - 'chmod 777 app/storage' should take care of it.

You will need a database named 'phpdemo' and a db user named 'root' with no password. If this isn't possible, please edit app/config/database.php to reflect the appropriate values. To set up the database, type 'php artisan migrate' followed by 'php artisan db:seed'.


### Contributing To phpdemo

**All issues and pull requests should be filed on the [afstanton/phpdemo](http://github.com/afstanton/phpdemo) repository.**

### License

The 'phpdemo' web grading app is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
