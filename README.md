
1.INTRODUCTION:

An automatic teller machine or ATM allows a bank customer to conduct their 
banking transactions without of going to the bank. The transaction done at the 
ATM’s are considerably fast as compared to the bank counters.
In the fast-moving world today, it is not worthful for 
one in wasting their time at the banks for access to quick cash. ATM results in 
performing amazingly fast transactions for a customer and being done in a 
confidential manner.
The ATM System is the project which is used to access their bank accounts in 
order to make cash withdrawals, balance enquiry, etc...

1.1 PURPOSE:

The following are some of the features of this project:
1. It allows customer to perform the transactions effortlessly, reliably and 
more secure.
2. The ATM machine provides a simple and user-friendly interface which is 
understandable for anyone.
3. It keeps the all the transaction records of the customers.
4. A customer will be required to enter ATM Card number, personal 
identification number (PIN) – both of which will be sent to the database 
for validation and then will be allowed to perform the required 
transaction.
5. It consists of options such as withdraw cash, balance enquiry, mini 
statement, change PIN, etc….

1.2 SCOPE:

The main objective of the Automatic Teller Machine is 
to perform bank transactions such as cash withdraws, money transfer, mini 
statement, balance enquiry, PIN change. It has a connection with the database 
and contain of all the bank details of the customer and transactions records. 
The scope of the project is to design an automated teller machine that is 
capable of processing customers account as well as enabling them to make 
withdrawals at the ATM.
Predominantly, the aim of ATM project is to fully 
computerize the banking system into an automated teller machine which can 
be easily accessible by customers. This software takes and input of card 
number and a PIN of the user for login proposes and outputs an interactive 
display which contain list of functions and user selects the required 
transaction.

1.3 Definitions, Acronyms, and Abbreviations:

•SRS Software Requirements Specifications

•ATM Automatic Teller Machine

•SB Saving Bank

•CB Current Bank

PIN Personal Identification Number

1.4 References:

1. https://www.google.com/url?sa=t&source=web&rct=j&url=https://tejalal.files.wordpress.com/2015/09/atmsrs.pdf&ved=2ahUKEwithqfKlrLvAhX3wzgGHRTTBMgQFjAAegQIARAC&usg=AOvVaw2osU98yuWK5E8lnfLxGC7c

2. The Complete Reference Java (Seventh Edition) -BY HERBERT SCHILDT

1.5 References:

Section 1.0: Discusses the purpose and scope of the software.

Section 2.0: Describes the overall functionalities and constraints of the 

software and user characteristics. 

Section 3.0: Details all the requirements needed to design the software.

2. THE OVERALL DESCRIPTION:

2.1 PRODUCT PRESPECTIVE:

The ATM is an application that is used by the bank to make customer use perform transitions using a computerized system where customer can withdraw cash, check their bank balance, mini statement, etc… 
Using these computerized machines for banking purpose there will be more security for the customers details. It maintains all the transactions records of the customer. This system stores all the data in the database, so there will be no loss of data of the customers.

2.2 PRODUCT FUNCTIONS:

The following are some of the functions provided by the project:

1. Log In: firstly, the user must enter the card details. Once the user enters the details, then the details are sent to the database and check whether the user has a bank account in the bank. After the verification od card number, then the user is asked to enter the PIN. Same verification process happens with the database.

2. Selecting the Transitions: After successful Login, the user will be able to see a display which consist of list of functions like banking, change pin, mini statement, money transfer, etc... The user needs to select required function which he or she want to perform.

3. Account type: The user selects the account type to which the transactions are done i.e., savings account or current account.

4. Withdrawal/deposit: This option here provides the which transaction he or she wants to perform i.e., either withdrawal or deposit.

5. Amount: If the user selects withdrawal option, then user need to enter amount he or she wants to withdraw from the account. Here, the user needs to enter amount less than his available amount in the account. If the user deposit, then the amount is automatically counted by the machine and displays the output.

6. Balance enquiry: The user can check he/her account balance using this feature.

7. Mini statement: This feature allows the user to review their last 10 transactions.

8. Cancel: the user can abort the transition.

2.3 USER CHARACTERISTICS:

The system provides different functionalities based on different types of users. 
The admin will be the controller and will be having all access to the database and users bank account. The user will be accessing his/her bank details from the user panel.

Features available for admin:

• Admin will be managing user account in the database.

• Admin will be creating or deleting the user.

• Admin can change the passwords.

• Admin can be able to access all the transaction receipts.

• Can edit user details.

Features available for user:

• Can perform different transactions such as withdraw or deposit.

• Can change PIN.

• User can review his/her bank transactions.

• User can check account balance.

2.4 CONSTRAINTS:

• The ATM must serve one person at a time.

• If no of unsuccessful pin attempts must not exceed 3. After 3 unsuccessful attempts the card will be blocked, and it can be unblocked by contacting the bank.

• The minimum amount of withdraw is RS.100

• Max withdraw per day RS.40000 and max withdraw amount per transaction is RS.15000.

• This system completely works on internet so, it requires high speed internet.

• The operation with ATM requires skilled trainers.

• More surveillance camaras need to be placed at the ATM. Due to possibility of stealing.

2.5 ASSUMPTIONS AND DEPENDENCIES:

The code should be error free.

The system should be user-friendly so that it is easy to use for the users to operate easily.

3. External interface Requirements:

3.1.1 User Interface Requirements 

This as an interface for both user and admin will be very user friendly

1. A login screen is provided in the beginning for entering the required ATM card number and pin to enter.

2. An unsuccessful login leads to a reattempt (maximum three) screen for again entering the same information.

3. In case of administrator, a screen will be shown able to add accounts, delete accounts, block accounts. 

4. In case of delete and block, a screen is displayed to confirm the user’s for block/delete the account.

5. In case of blocking system, a screen is provided asking for the card no. By entering the card no of a particular user, system access can be blocked for him.

6. After the login, a screen with several options is then shown to the user. 

7. A screen will be provided for user to check his account balance. 

8. A screen will be there for withdraw from this account (if entered amount is present in the user’s account else shows insufficient balance amount.

9. A screen will be provided for the user to perform various transactions in his account. 

3.1.2 Hardware Interface Requirements

1. These are the following hardware requirements.

2. Operating system: window 7 or more (it will be easy control) i3 and above processers.

3. RAM: 1 GB or more for good performance.

3.1.3 Software Interface Requirements

1. Browser(any) for seeing the output.

2. any text editor for designing web pages. 

3. Server: Tomcat (9.0).

4. MySQL (database for storing the data).

3.1.4 Communication Interface Requirements

Windows is used as communication interface between user and admin.

4. System Features:

It should guarantee that user account is safe, and the money are present in the account with high security.

1. Only admin can able to see all user account and delete or add the account or block the account.

2. The user will be able to enter his account only if the user no and pin is correct.

3. It will update the balance of the user after withdrawing or deposit of his account.

4. admin can only enter admin screen inly when the admin id password is correct (for security of user’s account).

2. Receipt Generation 

After each transaction user has performed, a receipt is generated that contains all the information about the transaction. The format of the generated receipt is as shown below: -

Account No: -

Username: -

Balance amount: -

5. Other Non-functional Requirements

5.1 Performance Requirements

The following list provides a brief summary of the performance requirements for the software:

5.1.1 Capacity

The ATM will provide customers a 24-hour service whenever they need

5.1.2 Dynamic Requirements

• In ATM if user withdraw the amount then immediately the amount balance should be updated (new balance=old balance-withdraw)

• In ATM if the user deposit the amount then immediately the amount balance should be updated (new balance=old balance + deposit)

• If admin want to implement any operation such as add account or removing account or delete of account, then

For adding account:

• When admin add the account then new account is created For deleting account:

• For this the account will removed from the database

For Blocking account:

• For this no transaction is done

5.1.3 Quality

To ensure that the final software for Automated Teller Machine (ATM) is of high quality, some quality control activities should be decided in advance to perform them throughout the development of the software.
List of quality control activities that are used to identify and remove defects from the software, hence making it a high-quality controlled system:

• Requirements Review

• Design Reviews

• Code Reviews

• Testing

5.2 SOFTWARE SYSTEM ATTRIBUTES

5.2.1 RELIABILITY

• The system should be reliable in the sense that there should be no room 

for mistakes. Every activity/ function of project should be indefectible.

5.2.2 Availability

• The ATMs network is available whenever the person is in need at any time.
5.2.3 Security

• The system is to be secure in the sense that nobody except the authenticated users can login and use the system.

• Users are advised to change their PIN for the first use.

• Users are advised not to tell their PIN to anyone.

• The maximum number of attempts to enter the correct pin is three times.

5.2.3 Maintainability

• The system should be maintainable in the sense that if any error occurs, it should be easily rectified, and the cost incurred in maintenance should 
be as low as possible.

• Only maintainers can connect new ATMs to the network.

5.3 BUSINESS RULES

• The user should have an ATM card. The user should know the pin to the ATM card. The amount the user is trying to withdraw shouldn't 
exceed the account balance.

• The amount of withdraw shouldn’t exceed the daily limit.

• The maximum number of withdraw in the ATM is three times per month. If the limit is exceeding, then tax will be provided.

7.OTHER REQUIREMENTS:

None 
