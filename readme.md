### A basic Laravel project to manage company with their employees that has the
Following:

1.	The project will use basic Laravel Auth, with a default account to log in as administrator (middleware to control page authentication).
2.	Use database seeds to create the default user, using these credentials:
      <pre><code>
      		a. Email: admin@admin.com Password : password
      		b. Email: user@user.com Password : password
      </code></pre>
3.	Use middleware auth to protect route companies & employees from accessing by user@user.com.
4.	The project will consist of basic CRUD functionality (Create / Read / Update / Delete) for two menu items: Companies and Employees.
5.	Companies DB table consists of these fields: Name (required), email, logo, website.
6.	Employees DB table consists of these fields: First name (required), last name (required), Company (foreign key to Companies), email, phone.
7.	Use database migrations to create those schemas above.
8.	Store company’s logos in storage/app/public folder and make them accessible from public.
9.	Use basic Laravel resource controllers with default methods – index, create, store etc.
10.	Use Laravel’s validation function, using Request classes.

<pre><code>
	Please seed database before running
</code></pre>