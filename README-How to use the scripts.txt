--Hocam bilgisayarýmda 2 mysql yüklü olduðu için php filelarý yazarken portu 3308 yapmam gerekti bazý scriptlerde var programý çalýþtýrmadan önce onlarý 3306 yaparsanýz bütün errorlar çözülür.

--The enterance page is register.php, it contains a link for admin login and user login. Also, there is a register area that customers can registers them to the system. At the bottom there is a mail area that customers can send their complaints. (All areas in this page should be filled, otherwise forms won't be send, we achived that with required key)

--The next page if the customer logins to the system is index.php, you can see what customers can do in this page.  (All areas in this page should be filled, otherwise forms won't be send, we achived that with required key)

--The next page if the admin logins to the system is admin-login.php, he will give his username and password after that admin-index.php will open. In there admin can see all the users and reservations from the db. Also he can delete a reservation or a user from the system. (If admin decide to delete a user from the system, all corresponding reservations from the system will also deleted)

--Important note admin can see who reserved for the seat ect... we add it last minute but you can also see it in the table, we used $_SESSION attribute.