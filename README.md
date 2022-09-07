## Chunkifier

In this system I wrote a service for chunk the file in specific directory. I used chunk class and implement it with three function in it and also check the type of incoming file  (Normal,Sparse).
You can change two parameters in “config.php”:

1) file_size 			=> first file size = 1337 bytes
2) incrementalـnumber 	=> Each chunk should be 11 bytes larger than the previous chunk = 11 bytes

for executing this service it's enough you do these:
-	Command to run “php chunkifier.php File Directory”

## Docker image


## Project’s files:
1.	PaymentHandlerService.php 		in “app/Services/PaymentHandler/”.
2.	PaymentHandler.php                            in “app/Services/PaymentHandler /Interfaces/”.
3.	AbstractPaymentHandler.php	in “app/Services/PaymentHandler /Classes/”.
4.	DepositeHandler.php			in “app/Services/PaymentHandler /Classes/”
5.	WithdrawHandler.php		in “app/Services/PaymentHandler /Classes/”
6.	CurrencyHandler.php			in “app/Services/PaymentHandler /Classes/”
7.	FileHandler.php			in “app/Services/PaymentHandler /Traits/”
8.	PaymentHandler.php			in “app/Services/PaymentHandler /Traits/”
9.	RunService.php			in “app/Console/Commands/”
10.	CommissionTest.php			in “tests/Unit/”
11.	payment.php				in “config/”
12.	payment.csv				in “storage/files/”




