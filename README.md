Clone the Project 
Php - 7.2
laravel - 7
run composer install - it will install laravel/ui and other packages and vue ui
run npm install and npm run dev
create the database

I have made Admin table and Client Table

Both can register and login 
For more data for client run the seeder 

Admin login link - http://localhost:8000/admin/login
Admin register link - http://localhost:8000/admin/register

Client login link - http://localhost:8000/client/login
Client register link - http://localhost:8000/client/register

Once you register a client the status will be pending

After you register the admin and login youll b able to see the pending clients then you need to approve and reject the client
Accordingly the entry will be display on the admin homapage table 

I have used pagination to show the table data.