# Sports-Equipment-Rental-System
**--PROJECT CODE IS ON MASTER BRANCH---**

A project that help the people to rent items on this website. This web application is not complete yet (1/1/2021), so stay tuned. Thanks !!!! PROJECT CODE IS IN THE MASTER BRANCH !!!.



**INTERNATIONAL ISLAMIC UNIVERSITY MALAYSIA**

**KULLIYYAH OF INFORMATION AND COMMUNICATION TECHNOLOGY**

**SEM 1 2020/2021**

**Web Application Development**

**Sports Equipment Rental System for IIUM**

**Prepared by: Group Al Mukminin**

| Muhammad Adib bin Mohd Zafrullah | 1726359 |
| --- | --- |
| Muhammad Hariz bin Harudin | 1726359 |
| Ku Hisyamuddin bin Ku Zainudi | 1724663 |

Lecturer: Sir Sadry Abu Seman

1. **Introduction of the web application.**

In maintaining a healthy body, sports can be very successful alternative to achieve it. The longer, faster, and more frequent you exercise, the greater the health benefits, including lowering the risk of diseases such as cancer and diabetes. Based on a decade of clinical research guidelines, studies have shown that people who participate in the physician&#39;s prescribed amount of exercise live on average three to seven years longer than couch potatoes. In this era, where technologies do not longer consider as desirable things, whereas it is essentials for our daily life, we must not forget to exercise regularly. Not to say that the existence of technologies makes people lazy to do sports, but we can see people more prefer to play with their gadgets, smartphones and spend time on the Internet rather than doing activities outside.

A lot of people love sports, just named it, football, badminton, chess, marathon, basketball and many more, there must be someone who take one of these sports to become their favourite sports. But love is not parallel to the ability to play the sport, you can love football, but you can be very bad in it. The best way to improve is to play it regularly. However, some people do not have the equipment considering some sports equipment are expensive to buy. Let say, once, you have high spirits to play basketball, even so, there are no person bringing a ball to the court. This is where our web application, Sports Equipment Rental System for IIUM Students, come to action.

We decided to develop an application where it helps people in getting the sports equipment. It is Sports Equipment Rental System. This application would make data storing and data retrieval easier for the records. It is a complete system where it provides an easy way to deal with customers. This system will be provided with a lot of features that are crucial such as the list of customers and the equipment that they have rented with a date and more. Students can rent sports equipment from other students so there is no need for the students to purchase it for a high price.

1. **Objective of the web application.**

Our main objective for this project is to make it easier for the **customers and owner to go through the process of renting**. So, we provide this website and try to make it useful and friendly to our users. Besides that, it is our target to **give a chance to all** and provide great facilities for them to enjoy sports. We will produce documentation on this project at the end of the development phases to report on the completion and progress flow. The business operation for sport equipment rental that will be automated upon project completion are as follows: -

- Web-based application that can be utilised with internet connection.
- Easy storage by making use of database technology.
- Easy access to rent sports equipment from other students.

1. **Features and functionalities of the web application.**

  1. **User Authentication**

In this function, users have to login to make sure they are an actual user. This is to make sure there are no scam or fraud occurred on our system. For those who does not have any account yet, they have to register by filling up some form with some information about themselves. The information needed such as name, username, password, mobile phone number, age and agreement of our website.

  1. **Viewing list**

This function is where the users can view the list of items to be rented by other users. Users can click the items listed and get some details regarding that item. It is like any other E-Commerce store where they have some listing of items. The data needed for this function is image, title of item, price, the renters, description, and the preferable type of delivery (either Cash on Delivery or self-pickup).


  1. **Renting**

This function is for the users who want to list their items for rent. They can use this function and fill in some details regarding the items. After creating a listing, the users can view the item that they listed, if there are person who make a purchase, they will get a notification and prepare the items to be rent. This is the most crucial function and the hardest function to be create.

  1. **Feedback and rating**

After completing the rent process, users have use the items, and the items were returned to the owner, both users have the rights to give feedback to each other. This is to make their profile good and alert other users regarding that person. If they have a bad rating, it is considerable to not rent or give rent for that person, if it is other way round, people will feel more secure and trusted that users.

1. **Define the views, controllers, routes and models. Include ERD for your database tables with one-to-many relationship.**

**View**

The view is what the users will see, this part contains the HTML and the CSS, which display the interface of our web applications. Users can see some listed of items, and forms to fill. By filling up this form we can get some data that will be used for the controller.

There is 5 page of views in our project that is:
1) The login and registration page
  - For user authentication
2) Dashboard, where we display the navigation bar and welcome text
  - Main page, and from here we navigate to other page
3) List of rent items
  - The items that can be rent are display here.
4) Details of student rental
  - The items that the student rent are registered here. This include the delete, create and edit the details of the student rental.
5) Rental page 
  - Users can rent the items by filling up form that have the date, starts time and end, and the items id.

**Model**

The Model component corresponds to all the data-related logic that the user works with. This can represent either the data that is being transferred between the View and Controller components or any other business logic-related data. All the data of the users and the items listed are stored in the database and will be used in certain function of the system. The items listed will be used in the viewing function, renting, and the post purchase. The users information are stored for verification purposed only, other users cannot see it as it is private data.

1) The details of the users are stored in the database. This includes the autentication of the users that been registered in the registration page.
2) The details of the items that the user has rent are stored in the model.

**Controller**

The data taken from the model will be used for this controller for some working. How the data should be in view also need to be considered in this controller. Users will never know how the controller functions. The controller handles all the requests from the client. All the users&#39; requests will be sent to the controller and if the request from the users&#39; needs to get any data inside the database, this controller will interact with the model so the users get the response for their request. For example, our system for renting, if users want to rent the items listed, the controller will handle this input and the controller also will send a request to the model to update the database.

1) CRUD function where the details in the models can be created, update, registered and been update, For our system, CRUD the details of the users and the item they rent.
2) The controller to calculate the rent price of the items 

**e. A sequence diagram to represent the interaction of the web application.**


![alt text](https://github.com/MrAdib1898/Sports-Rental-Equipment/blob/main/Sequence%20diagram.png)

_Diagram 2. Login and Viewing function_

**Work Delegationn** -


Ku Hisyamuddin: Register and the login function, create new rental equipment for student, feedback forum.

Muhammad Adib : Rental payment, delete equipment 

Hariz Harudin : About Us, List of Item, edit the equipment

f. References.

(i) Model View Controller.

_MVC Framework - Introduction - Tutorialspoint. (n.d.). Tutorialspoint. Retrieved December 29, 2020, from_ [_https://www.tutorialspoint.com/mvc\_framework/mvc\_framework\_introduction.htm_](https://www.tutorialspoint.com/mvc_framework/mvc_framework_introduction.htm)

(ii) Diagram and Chart

_Diagram Creator. (n.d.). Lucidchart. Retrieved January 1, 2021, from_ [_https://lucid.app/users/login?referredProduct=lucidchart_](https://lucid.app/users/login?referredProduct=lucidchart)

