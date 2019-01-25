


<?php
$username = $_POST['username'];
$email = $_POST['email'];

$password = $_POST['password'];

$password2 = $_POST['password2'];

echo $email." hello";


if (!empty($username) || !empty($email) || !empty($password) || !empty($password2)){

	$host = "localhost";
	$dbUsername= "root";
	$dbpassword="";
	$dbname="blockchain";



$conn = new mysqli($host, $dbUsername, $dbpassword, $dbname);
if(mysqli_connect_error()){
	die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
}else{
$SELECT = "SELECT email From register where email = ? limit 1";
$INSERT = "INSERT Into register(username ,email,password,password2) values (?,?,?,?)";

$stmt = $conn->prepare($SELECT);
$stmt->bind_param("s",$email);
$stmt->execute();
$stmt->bind_result($email);
$stmt->store_result();
$rnum = $stmt->num_rows;

if($rnum==0){
	$stmt->close();
	$stmt = $conn->prepare($INSERT);
	$stmt->bind_param("ssss", $username, $email, $password, $password2);
	$stmt->execute();
	echo "new record inserted succesfull";

}else{
	echo "someone already using this email id";
}
$stmt->close();
$conn->close();


}
}else{
	echo "all field are required";
	die();
}


?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Education</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">			
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
			<script>

</script>
		</head>
		<body>	
		  <header id="header" id="home">
	  		<div class="header-top">
	  			<div class="container">
			  		<div class="row">
			  			<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
			  				<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
			  				</ul>			
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
			  				<a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text">support@XinFin.org</span></a>
			  						<a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><span class="lnr lnr-envelope"></span> <span class="text">Login</span></a>							
		
							
			  			</div>
			  		</div>			  					
	  			</div>
			</div>
			
			
			
		   <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.html"><img src="img/logo.png" alt="" title="education" class="img-fluid"/></a>
			      </div>

                  <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li class="menu-has-children"><a href="">Online Blockchain Training</a>
			            <ul>
			              <li><a href="BlockchainBasic.html" data-toggle="moda" data-target="#exampleModal" data-whatever="@getbootstra">Blockchain Basic Course For engineer</a></li>
			              <li><a href="bitcoinbasic.html" data-toggle="moda" data-target="#exampleModal" data-whatever="@getbootstra">Blockchain Advanced Course For Engineer</a></li>
                          <li><a href="Ethereumbasic.html">Blockchain Advanced Course For Professional</a></li>
			            </ul>
			          </li>			          					          					          		          
			          <li><a href="about.html">University Course Offline</a></li>
                      <li><a href="events.html">Event</a></li>
					 <li><a href="VerifyCertification.html">Verify Certification</a></li>

                     
                       <li><a href="contact.html">Contact Us</a></li>


			        </ul>
			      </nav><!-- #nav-menu-container -->	
                  </div>
		    </div>
		  </header><!-- #header -->
			  
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Introduction To Blockchain				
							</h1>	
							
							
							<p class="text-white link-nav"><a href="index.html">Home_old </a>  <span class="lnr lnr-arrow-right"></span>  <a href="gallery.html"> Gallery</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				<section class="">
				<div class="container">
			
							    		  <h3 class="mb-6">1.History of the Blockchain</h3>
							
								<p>In 1991, Dr W. Scott Stornetta published a whitepaper with his co-author Dr Stuart Haber to introduce ‘blockchain’. The term blockchain can be defined as a decentralised, cryptic database on which digital transactions take place.</p>


<p>The origin of Blockchain can be traced back to 1991. A structure which was almost the same as Blockchain was mentioned in a research paper by Haber and Stornetta with the title: “How to Time-Stamp a Digital Document” in 1991.
</p>
<section class="gallery-area section-gap">
				<div class="container">
					<div class="row">
<div class="col-lg-6">
							<img src="img/gallery/pasted image 0 (1).jpg" class="img-fluid">
							
								<div class="single-imgs relative">	
								
									<div class="overlay overlay-bg"></div>
									<div class="relative">				
									

									</div>
								</div>
							</a>
						</div>
						
						<div class="col-lg-6">
							<img src="img/gallery/pasted image 0.png" class="img-fluid"></div>
							
								
							
					
						
						</section>

     <p>It was reported in the paper that through a timestamping server, a client sent a document and the server signed the document with the current timestamp. In addition, the server linked the document to the previous document. The pointers also pointed to specific data and not the location of the document. So if the data changed, the pointer would become useless. It ensured no one could change the data which had once passed through the server.</p>
     <p>
       From this paper, it can be observed that the following two properties are methods of time-stamping digital documents:
     <p>1.Finding a way for automatic time-stamping, without relying on the characteristics of the data medium, making it impossible to change any part of the document without the change being very apparent.</p>
 
     <p>2.It would be impossible to stamp a document with a different time and date from the actual one</p>
     <p>The next and certainly the most important Blockchain innovation was the Bitcoin. Satoshi Nakamoto published a white-paper in 2008, titled “Bitcoin: A Peer to Peer Electronic Cash System”. The paper mentioned that with peer-to-peer networking, there will be a solution to the problem of double spending in digital currency. The paper was aimed at building a peer-to-peer digital currency version which would enable people to spend it directly without involving a financial institution. It was a great development that allowed the user to make direct transactions without relying on a third party.</p>
								
								<div class="transbox">
								<h3 class="mb-4">2.The Evolution of the Blockchain: Generation 1 to 4</h3></div>
								
								<p><h3><u>1st Generation Blockchains focus on moving value, maintaining a ledger, ideal payment systems</u></h3></p>
                                       <p>The functions listed above represent the real basis on which bitcoin was created. Another main part of Bitcoin is the fact that it was created to be open source, that is, made available for other users or developers to utilize or modify. By making the Bitcoin code open source, Satoshi Nakamoto gave anyone the chance to learn from Bitcoin, build on it and expand beyond it. </p>

                                <p><h2>1.1  First Generation Blockchain Technology</h2></p>

                                <p><strong>In order to understand the 1st Generation blockchain technology, it is essential to observe Bitcoin’s Blockchain. With the use of blockchain technology, Bitcoin became the first successful digital currency in the whole world.</strong></p>


                                <p><strong>This was achieved through the 1st Generation blockchain technology.</strong></p>

               <p> <h4><u>Example of a Bank:-</u></h4></p>
                          <p>Alice,, who works as a driver receives a total tip of 200 USD at the end of the day. He takes the money to Wells Fargo Bank where he deposits the money. Wells Fargo Bank updates its ledger, which in turn enables Alice’s bank account with them to show that he now has 200 USD.
While Alice was on the way home, he realizes that he needs to buy dinner, which requires some cash on hand. However, the only Automated Teller Machine (ATM) along the road to his home belongs to HSBC bank. Meanwhile, HSBC bank ledger does not show that Alice has 200 USD, and he has no choice but to return to Wells Fargo Bank for his cash withdrawal.
Without considering the inconvenience of Alice walking to the ATM of Wells Fargo Bank, a centralized ledger requires a certain level of trust: Alice has to trust Wells Fargo Bank with his money, and that his money will be returned upon his request. If the bank’s records get erased, Alice completely loses all his money with them.
</p>






                            <p>How the Blockchain is different</p>

                             <p>In contrast, all participants share the ledger in blockchain, making it a decentralized and distributed ledger. Rather than leaving the record of all transactions to one central bank, everyone has a copy of the same ledger which is regularly updated. Even if a single ledger is tampered with, it will not affect other ledgers because there will be no recording or validating.</p>


               <p><h3>Example of 1st Generation Blockchain:-</h3></p>

                    <p>Alex and 5 of his other friends have a meet-up session every day. During each session, they discuss among one other how much each had spent, and what they spent on, over the past day. Each of them has a notebook, and each takes a record of the payments of all 5. After recording all these transactions, they all compare notes to ensure that the results are the same. After which all 5 of them sign on all 5 notebooks, and they take the notebooks home until their next session.
There are several benefits to their method:</p>

                    <p>Losing any of the notebooks would have no negative effect because the records are still stored with the others.</p>
                    <p>2. If anyone of them tampers with the records he possesses, it will immediately become obvious during their next meet-up session. A cheater would literally have to break into 4 other homes, steal their notebooks, replace them with notebooks that look exactly the same, rewrite on all the pages that were previously written on, and forge the signatures for each page before the next session. This example is for 5 friends; now imagine it is a few thousand friends who hold this session instead. And each session takes place every 10 minutes instead of once in a day.</p>

                    <p>3. The need for ‘trust’ is useless in this case: all transactions are verified, and signed, by all members when each session ends.</p>

                    <p><strong>Now, why Bitcoin was created?</strong></p>

                    <p>The founder of Bitcoin, the mysterious Satoshi Nakamoto planned to remove Third-Party Verification and intended to create a trustless payment platform with transactions that cannot be reversed. Such a system is helpful in private transactions, receiving and providing financial aids to people residing in unstable countries with collapsing economies. Bitcoin is a currency with no borders.</p>

                     Imagine you did a work-from-home internship for a startup in the USA.

                       And you got paid through Paypal.

                       Paypal will charge you a transaction fee of 2.5 to 5%.
                       At that moment, you have USD in you Paypal account, which needs to be converted. The standard conversion rate of Paypal or other converters is usually 2 to 3 Rs/USD less than the actual rate.
                       When you finally have the SGP currency in your bank account, you will be charged by your bank once your balance is less than the “Minimum Balance Criterion”,.


                   <p>This entire process would take a minimum of 3-5 business days.</p>

                   <p>
                      For instance, Alex wants to send $100 to Bob. However, he would have to ignore a trusted third party like a Bank or Financial institution in order to enable Bob receive it earlier. A transaction charge of 2% is deducted from the total amount and Hrishikesh receives $98 only. Now the 2% charged might appear like a very little amount. However, imagine if you sent $100,000 rather of $100, then the transaction fees will also increase to $2,000, which is a huge amount. According to a record from SNL Financial and CNNMoney, JPMorgan Chase, Bank of America and Wells Fargo earned extra than $6 billion from</p>
							    
                       <img src="img/image 0.png" class="img-fluid center">
				       <p>Most of these expenses are recorded under Third-Party/Broker Fees, which you pay to a trusted third party (Paypal and Your Bank) for carrying out your transactions.
                       </p>
					   
					     <p><strong> On the contrary, if the startup you worked for had paid you in Bitcoin, there would have been a very minute fee (less than the above scenario) and the whole transaction would have been completed within an hour..</strong> You would have directly received Bitcoin in your wallet. 
                          </p>
						  <strong>This method of receiving fund is way cheaper and faster. </strong>

													 
											
				 <p><h3><u>2nd Second generation blockchains are those like Ethereum, Ethereum Classic, NEO and QTUM to name a few.</u></h3></p>
								
							<p>These are widely referred to as the second generation because they have made use of blockchain’s idea of recording transactions, and expanded it to allow progAliceming languages. These second-generation blockchains have also kick-started smart contracts. These give room to customizable transactions, which means you can custom create and transactions to be carried out in whatever ways best fit the needs of all parties involved.</p>			
							 <h3>1.2 Second Generation Blockchain</h3>
							 
							 <p>Second generation blockchains started the use of maintaining assets in general by a blockchain. In this generation, anyone can issue shares on the blockchain. Ethereum is a good example of a second generation blockchain. Ethereum is based on applying authoritative rules for ownership, transaction formats and state transition functions, taking both the state of a blockchain and a transaction for that blockchain, which in turn results into a new state.</p>

                             <p>To further understand this, a closer look will be taken at Ethereum. Although often paired with Bitcoin as a cryptocurrency, Ethereum is actually a platform that uses the currency Ether. The purpose of its platform is to draw up ‘smart contracts’ and conduct transactions, and these processes are fueled by the currency ether (ETH).</p>
							<p><h4>But what is smart contract ?</h4></p>
							 <p>A smart contract is a coded contract that is subsequently uploaded to a blockchain. Whenever a contract is executed in a blockchain, every network node runs it, and then uploads it to the blockchain.</p>
							 <p>In simpler terms, the smart contract is a coded ‘If-Then’ statement. That is, if certain requirements are met, the terms of the contract will be carried out. This process is not trust-based; it can never be tampered with by any party, nor can any party cheat and fail on its end of the deal.  Introducing smart contract to the blockchain technology has many practical functions, as visibly portrayed by the simple example of online shopping.</p>

                             <p><h4>Example of Traditional Online Shopping .</h4></p>
                             <p>Alex wishes to buy a new phone from Vendor A. He is required to make an upfront payment, and the phone will be shipped to him within 3 working days after the vendor receives payment.</p>

                  <p><h4>There are a few issues that might arise in this scenario.</h4></p>
<p>Issue 1: Alex cannot find any review of Vendor A online. Therefore, he is hesitant to pay upfront</p>

<p>Issue 2: Vendor A has to receive payment upfront, because Ankit might decide not to pay after receiving the phone.</p>

<p>Issue 3: The shipping company might lose the product, which means Alex  does not get his phone, and Vendor A gets a bad reputation.</p>			

<p><h4>All of these potential problems can be resolved using a smart contract.</h4></p>

<p>1. Alex only pays for the phone upon delivery</p>
<p>2. Vendor A is guaranteed payment once Alex receives the product</p>
<p>3. The shipping company will compensate Vendor A if the product is lost/damaged, and Ankit will be notified that it was not Vendor A’s fault.</p>
			
<p>This entire process requires no middleman to make sure that the deal takes place, and also, there is no need to fill paperwork or pay administration fees: the entire contract will be carried out and entered into the blockchain making it binding and unchangeable.</p>
							 
							 <p><strong>2nd Generation Blockchain Technology</strong> Technology is easily an upgrade; it is more than a simple digital currency. It has grown into a platform for creating decentralised applications which can be applied into many aspects of our daily lives to reduce cost and improve efficiency.</p>

<p><h3><u>Third generation blockchains, present themselves as blockchains that can service massive amounts of people and self-govern.Third generation blockchains have self-governance at their core. E.g. Steem</u></h3></p>
							 <p><h3>1.3 Third Generation Blockchain Technology :-</h3></p>
							 
							 <p>Third generation blockchains are the most useful where contract and agreements and information flow are concerned. What third generation blockchains are capable of doing is to connect two or more blockchains like a computer network connection </p>
							 <p>Apart from money and assets, agreements can also be registered on the third generation blockchain. With the help of the digital contract, the participants are forced to keep their promise. For instance, if an insurance contract involves regular payments, such an insurance contract can end the agreement on its own (without requiring the consent of the participant), when the participant misses payments.</p>
							 <p>Third generation blockchains can also function in layers. That way, one layer could handle contracts, one layer handles transactions and another layer passes secure data among blockchains. This is aimed at securing the blockchain and never slowing it down or compromising its performance. Blockchains like Ethereum gets compromised that way. For every time a new user or token launches on the Ethereum blockchain, it compromises the blockchain speed and slows it down to manage the increasing requests and actions the blockchain needs to process or validate.</p>
							 
							           <div class="transbox">
								           <p><h3 class="mb-6">2. What is blockchain ?</h3></p>
								       </div>
							 <p>Blockchain is a decentralized distributed database of immutable records, where transactions are protected by strong cryptographic algorithms and the network status is maintained by the Consensus algorithm.</p>

<p>In simple words, Blockchain is a chain of blocks that contain information.</p>

<p>Blockchain is the algorithm for Distributed Ledger Technology (DLT ). The concept of DLT and Blockchain can be used in various applications different from cryptocurrency network. Such industries where Blockchain can be applied include: Real estate, logistics, Banking and Financial Sector, Fintech and elections and surveys. The list is endless and expands daily.</p>

<p>As a matter of fact, the Governments of many countries and certain top Banks have already introduced Blockchain technology to many of their conventional transactions. The applications and future potential of the blockchain fAliceework is massive and widely considered to be implementing changes in the mode of transactions in various sectors.. </p>

<p>The true potential of the Blockchain technology only attained its full potential and became realistic when it was used in creating the digital cryptocurrency “bitcoin” by Satoshi Nakamoto..
</p>
                        
							           <div class="transbox">
								           <p><h3 class="mb-6">3.Why do we need blockchain technology?</h3></p>
								       </div>
									   
									   <p>The origin of the blockchain technology can be traced back to early 2008, a period at which the world was going through a miserable financial crisis. During this period, someone with the false name: “Satoshi Nakamoto”, no one really knows if it was a person or a group, noticed the danger of the centralized nature of our financial system. Back then, to transfer money or even carry out a simple transaction, the assistance of a third party (like a bank or Paypal) was required.</p>
							
							<p><h5>There was a ridiculous level of power in the hands of the centralized third parties. For instance,</h5></p>
							 <p>They have all your information</p>
                             <p>They have the power to freeze your accounts</p>
                             <p>You have no other choice but to trust the system</p>

                            <p>In place of this centralized system, Satoshi Nakamoto proposed a decentralized peer-to-peer financial system involving a cryptocurrency called Bitcoin. And Blockchain is the basic technology of Bitcoin.</p>
							</p>While traders only focus on the million dollar gains they could possibly realize, they always overlook the basic technology behind cryptocurrency. Blockchain is the technology behind Bitcoin and Altcoins, which makes storing valuables possible. Blockchain stores data in a distributed ledger which can be potentially accessed and updated in a secure way by billions of people.</p> 
							 <p>Blockchain technology will soon go beyond the digital currency movement and begin to influence almost every sector. From real estate to entertainment, as startup businesses continue to integrate blockchain into their business models. The methods of governing some countries and their democratic processes will be influenced as well by the incoming wave of blockchain. </p>
							 <p>Electoral fraud and votes hacking had been a major over the years. Advocates of Blockchain are confident that introducing a public ledger voting system could provide an unhackable system for governments while also ensuring that votes get counted faster.
</p>
							 
						<p><h5>Business Scenario Implemented Using the Database</h5></p>
						<p>Considering the case of supply chain where multiple parties such as manufacturers, wholesalers, distributors, retailers and logistics are involved, the movement of a product through the supply chain is only individually tracked by the parties concerned.</p>
						 <img src="unnamed.jpg" class="img-fluid center">
						 <p>Each party will have their own database and an application to capture transactions and how products move through the chain. However, the problems with this approach are:</p>
						<p><strong>Different sources of truth:</strong> At any given time, all databases may not have similar data, as the process involved in updating the database depends on the organization, and there could be a delay in distributing the data to all the parties.</p>
							 
<p><strong>Exposure:</strong> For intermediaries are involved and there are multiple copies of data, the manufacturer will not be able to control the introduction of fake products into the chain or rather, the distribution of genuine products into the black market.

</p>
<p><strong>Human error:</strong>The data in one or more of the databases may not be uploaded due to human error, connectivity issues or application problems. This could lead to a dispute between parties, resulting in wasted time for resolving the dispute.
</p>

<p><strong>Lack of customer focus:</strong> The customer finds it very difficult to know if the product is genuine or not.
</p>
						   <p><h5> Business Scenario Implemented Using Blockchain</h5></p>	 
						   							 <p><h5>With the same Blockchain technology, all parties track the movement of products through the supply chain.</h5></p>

							 						 <img src="Blockhain-Tutorial-banner-1 (1) (1).jpg" class="img-fluid center">

							 
							 
							 
							 
							 <p>A single shared data storage, which is tamper-evident (designed to reveal any unusual interference) and protected using cryptographic methods.</p>
<p>All parties will have the same copy of this ledger.</p>
<p>All parties must reach a general agreement before a new transaction is added to the shared ledger.</p>
<p>Transactions recorded on the ledger can never be changed.</p>

                   <p><h5>Benefits of the ledger-based approach are:</h5></p>
				   <p><strong>Single source of truth:</strong> At any point in time, all the parties will refer to the same data since it is a single shared ledger.</p>
				   <p><strong>Early detection of human error: </strong>Since all parties need to reach a general agreement, any human or application errors will be discovered on time in the chain.</p>
				   <p><strong>Safety:</strong> The manufacturer can make sure that the quality of their products is intact.</p>
				   <p><strong>Customer centric supply chain:</strong> Since blockchain enables the manufacturer to directly connect with the customer; the manufacturer is able to provide a better customer experience</p>
                   <p><strong>Regulatory compliance:</strong> Through transparent auditing, Blockchain allows users to comply with regulations.</p>				   
							 
							 
							 
							 
							 
							 <div class="transbox">
								<p><h3 class="mb-4">   4. Features Of Blockchain :-</h3></div></p>
								<p><h4>Top 4 Major Features of Blockchain</h4></p>
								<p><img src="pasted image 4.png" class="img-fluid center"></p>
								<p><h5>Decentralized System:-</h5></p>
								<p>Decentralized technology gives you the opportunity to store your assets in a network that can be further accessed through internet. An asset in this case can be anything from a contract to a document and many more. Through this token-based asset, the owner has a direct control over his account through the use of a key linked to his account, giving the owner a power to securely transfer his assets to anyone he wants.The Blockchain technology proves to be a really useful tool for decentralizing the web. It has the power to bring big changes in the industries. </p>
                                <p><h5>  Mining:-</h5></p> 
                                 <p>Mining” is carried out by a “miner” who solves a complex mathematical computation. It is the process of creating new blocks and pushing them up to the blockchain. Miners compete with one other because of the reward they can get after they solve puzzles. The miner who solves the puzzle first will get the prize.  This process of solving the puzzle is called “Proof of Work”. This set of procedures that the network has to follow to create the next block is known as “the consensus model”. In Proof of Work, a miner has to use a large amount of computational materials to create the next block.
                                 So, this was all about Blockchain Features. Hope you like our explanation on Why Blockchain is popular.</p> 								
                                <p><h5>Safe and Secure System</h5></p>
								<p>is able to analyze and revise itself from time to time which serves like a self- revision process.All the nodes in a Blockchain together create a very powerful network. Every node serves as an “administrator” of the blockchain, and joins the network. Every node in the network is rewarded for participating in the network. Therefore, the nodes compete by solving computational puzzles for a chance to win the digital currencies. This way, these specific nodes are “mining” for the blocks that contain all the transaction details.Blockchain </p>
                                <p><h5> Increased Capacity:-</h5></p>
								<p>This is the first and also an important Blockchain feature. The most amazing thing about this Blockchain technology is that it increases the capacity of the whole network. This is because there are a lot of computers working together that offer more power in total then the few devices that are centralized.
A perfect example of this increased capacity function is reported in a project by Stanford University. A supercomputer that simulates protein folding was created for medical research.
</p>


                                

                                <div class="transbox">
								<p><h3 class="mb-4"> 5.What are the Benefits for Blockchain:-</h3></div></p>
								 <p><h6>1.Transparency</h6></p>
     <p><h6>2.Reduced transaction costs</h6></p>
     <p><h6>3.Faster transaction settlements</h6></p>
     <p><h6>4.Decentralization</h6><p>
     <p><h6>5.User-controlled networks</h6></p>
     <p><h6>6.Efficiency</h6></p>
     <p><h6>7.Auditabilit</h6><p>
	 
	                <div class="transbox">
						<p><h3 class="mb-4">6.Permissioned-vs-permissionless-blockchains<h3></div></p>
	                         <p><img src="img/pm1.png" class="img-fluid center"></p>
							 <p><h5>Permissionless Blockchain: </h5></p>
							 <p>Permissionless Blockchains allow anyone to take an interest. The exchanges on the platform are approved and handled by votes or agreement. A vote does not depend on having a previous character in the record and no previous trust is expected.
</p>
	                         <p>Permissionless Blockchains allow anybody to create an address and start interacting with the blockchain network. The internet is a good example of a permissionless system; where anyone can create any website they want. Similarly, with a permissionless blockchain, creating an address on the network allows any person, thing, or entity to interact with other members or parties. Each party can choose to run a node for the blockchain and help to verify transactions (using mining method), and create smart contracts on the network. This is the essence of Bitcoin and Ethereum Blockchain networks. These networks make use of a crypto-economic model (pushed by proof-of-work consensus method) that rewards people to run network nodes. All network participants get tokens as reward for their contributions.
</p>
	                         <p>Permissionless blockchains are becoming accepted as a foundation for business-to-consumer (B2C) and consumer-to-consumer (C2C) cases. Many startup companies are making use of Bitcoin and Ethereum network solutions. Most of these solutions use a token (cryptocurrency) system to simplify the exchange of value among participants with the use of an internal rewarding structure.
</p>
	 
	                         <p><h5>Permissioned Blockchain:</h5></p>
							 <p>Permissioned Blockchains limit access for those who can perform different activities on the Blockchain. The exchanges are approved and handled by the individuals with record, accepting them for certain trust levels.
</p>
	                         <p>A permissioned Blockchain is a closed community, and each participant is well defined. This type of Blockchain is built to allow an organization or a group of organizations to exchange information and record transactions very well. Although permissionless Blockchains was very popular in the business world, companies now know the many advantages of using Blockchains to expand business systems also, especially to provide trust, transparency, and efficiency into B2B exchanges. The Hyperledger Foundation is the leading open source initiative for these B2B Blockchains.
</p>
	                         <p>A permissioned Blockchain is run by the members of a certain group. Stakeholders “opt-in” to form a blockchain network. Only pre-approved entities can run the nodes that make transaction blocks valid and carry out smart contracts on the Blockchain. Permissioned Blockchains make it easy to share trusted information in a secure form, and with the required confidentiality for businesses to effectively operate.
</p>
	 
	 
	 
	 
	 
	 
	 
	 
                            <div class="transbox">
								<p><h3 class="mb-4"> 7.What is Difference Between Blockchain and Database:-</h3></div></p>
								<img src="img/pasted image 5.png" class="img-fluid center">
								<img src="img/pasted image 6.png" class="img-fluid center">
								<p><h5>The distinctions between a traditional (Relational or document-oriented) database and a blockchain -  </h5></p>
                                 <p>1.) In a traditional Database, a single authorised server or a group of authorised servers (sharing in MongoDB) store the data. The users of this data will have to assume that the organisation running the server will not change the data and the security of the server will not be affected.</p>
                                 <p>In a Blockchain technology, all the data are stored publicly on a peer-to-peer network and also verified publicly.</p>
                                 <p>Verifying is formed through cryptography – that is encryption and hashing. As the data is publicly stored, a Blockchain is very tough to hack.</p>
                                 <p>2.)In a traditional Database, there is no privacy problem. All the user data (access tokens and login credentials) are privately stored on the server.</p>

                                       <p> To handle the issue of privacy, the blockchain nodes are generally unknown. The user identity is instead in alias through a public cryptographic key. To check if the node has authorised any transaction or block, the digital signature needs to be verified with the use of the node’s public key.
</p>
                                 <p>3.)  In a traditional Database, there is no need to verify data or an agreed method.
In a blockchain, a proof of work or proof of agreed method is required so that only one state of the blockchain remains over the peer-to-peer network.

</p>
                                 <p>4.) In a traditional DB, there is no need to verify data or a consensus mechanism. In a blockchain, a proof of work or proof of stake consensus mechanisms is used so that eventually a single state of the blockchain is maintained over the peer to peer network.</p>


                      <div class="transbox">
						<p><h3 class="mb-4"> 8.How blockchain works?</h3></div></p>
                                <p>History of Cryptography</p>
								<p>Nearly everyone has heard of Blockchain and that it is cool.But not everybody understands how it works.</p>
								<p>So this will guide you how blockchain technology works.</p>
                              <p><h5>What is Blockchain? </h5></p>
								<p> A Blockchain is a diary that is almost impossible to forget.</p>
							<p><h5>Hash function</h5></p>
								<p>Let us imagine that 10 people in one room decide to make a unique currency. They have to follow the flow of funds, and one person – let's call him Alice – decides to keep a list of all the actions in a diary: Another person – let’s call him Sam – decides to steal money. To hide this, he changed the entries in Alice’s diary:</p>
								<p><img src="img/pasted image 7.png" class="img-fluid center"></p>
								<p>Alice noticed that someone had tampered with his diary and wants to find a solution to this.
He finds a progAlice called a Hash function which turns text into a set of numbers and letters, as shown in the table below.
</p>   
								<p><img src="img/pasted image 8.png" class="img-fluid center"></p>
							    <p>A hash is a set of numbers and letters, produced by hash functions. A hash function is a mathematical function that takes a variable number of characters and converts it into a set with a fixed number of characters. Even a small change in a set creates a totally new hash.
</p>
							    <p>Sam decides to change entries in the diary again. At night, he got to the diary, changed the record and generated a new hash.
</p>
							    <p>Alice noticed that somebody had tampered with the diary again. He decides to complicate the record of each transaction. Therefore, after each record, he inserts a hash generated from the record + last hash. Making each entry depend on the previous.
</p>
							    <p>That way, if Sam tries to change the record again this time around, he will have to change the hash in all the previous entries. But Sam really wants more money, and he spends the whole night counting all the previous hashes.
</p>
							<p><h6>Nonce</h6></p>
					    		 <p>But Alice did not want to lose hope, so he decided to add a number after each record. This number is called “Nonce”. Nonce should be chosen so that the generated hash ends in two zeros.
</p>
	                             <p> Now, to forget the records, Sam would have to spend hours and hours choosing Nonce for each line.
</p>
                                 <p>More importantly, the computers itself cannot figure out the Nonce quickly
</p>
							     <p><img src="img/pasted image 9.png" class="img-fluid center"></p>
							<p><h6>Nodes</h6></p>			
                                 <p>Alice realized that there were too many records and that he couldn’t keep the diary like this forever. So after writing 5,000 transactions, he converted them to a one page spreadsheet and Mary checked that all the transactions were right.
</p>								  
								 <p>He then spread his spreadsheet diary over 5,000 computers, which were all over the world. These computers are called <link>nodes</link>. and every time a transaction occurs it has to be approved by the nodes, each of whom checks its validity. A form of electric vote occurs once every node has checked a transaction, because some nodes may think the transaction is valid while others may think it is a fraud.</p>
                                 <p>Each node (computers) has a copy of the digital ledger or Blockchain, therefore each node checks the validity of each transaction. If a majority of nodes say that a transaction is valid then it is written into a block. At this junction, if Sam changes one entry, all the other computers will have the original hash. They would not allow the change to occur.
 </p>
                                 <p><h6>Block </h6></p>
								 <p> A block is a one spreadsheet but the whole family of blocks is the Blockchain and every node has a copy of the Blockchain. Once a block reaches a certain number of approved transactions, then a new block is formed.</p>
                                 <p>The Blockchain automatically updates itself every ten minutes. No master or central computer is needed to instruct the computers to do this.</p>
                                 <p>Immediately the spreadsheet or ledger or registry is updated, it can no longer be altered. Thus, it is impossible to forge but can only add new entries to it. The registry is updated on all computers on the network at the same time.</p>
                            <p><h6>Important points:</h6></p>
								 <p>1.   A Blockchain is a type of diary or spreadsheet containing information about transactions.</p>
                                 <p>2.Each transaction generates a hash.</p>
                                 <p>3.A hash is a string of numbers and letters.</p>
                                 <p>4.Transactions are entered in the order in which they occurred. Order is very important.</p>
                                 <p>5.The hash depends not only on the transaction but the previous transaction's hash.</p>
                                 <p>6.Even a small change in a transaction creates a completely new hash.</p>
                                 <p>7.The nodes check to make sure a transaction has not been changed by inspecting the hash.</p>
                                 <p>8.If a transaction is approved by a majority of the nodes then it is written into a block.</p>
                                 <p>9.Each block refers to the previous block and together make the Blockchain.</p>
                                 <p>10.A Blockchain is effective as it is spread over many computers, each of which have a copy of the blockchain.</p>
                                 <p>11.These computers are called nodes</p>
                                 <p>12.The Blockchain updates itself every 10 minutes.</p>

							<p><h6>Wallets, digital signatures, protocols </h6></p>
								 <p>Bob needed to explain the new coin so he gathered the 10 people together.</p>
                                 <p>Jack had confessed his sins and deeply apologized to the group. Therefore, to prove his sincerity he gave Ann and Mary their coins back.</p>
                                 <p>With everything sorted, Bob explained why this could never happen again. He then decided to implement something called a digital signature to confirm every transaction. But first, he gave everyone a wallet.
</p>
                            <p><h6>What is a wallet? </h6></p>
								 <p>A wallet is a string of numbers and letters,such as </p> 
								 <p> 18c177926650e5550973303c300e136f22673b74. This is an address that will appear in different blocks within the Blockchain as transactions take place. There will be no visible records of who did the transaction or with whom it was done, only the number of a wallet. The address of individual wallet is also a public key.
</p>
                            <p><h6>Digital signature </h6></p>
								 <p>You need two things in order to carry out a transaction: a wallet, which is mainly an address, and a private key. The private key is also a string of random numbers, but this private key must be kept secret unlike the address.
</p>
                                 <p>When someone decides to send coins to anybody, they must sign the message containing the transaction with their private key. The system of two keys is at the heart of encryption and cryptography, and its use predates the existence of Blockchain as it was first proposed in the 1970s.
</p>
                                 <p>Once the message is sent it is broadcast to the Blockchain network. The network of nodes then works on the message to make sure that the transaction it contains is valid. If it confirms the validity, the transaction is placed in a block and after that no information about it can be altered.
</p>
                                  <p><img src="img/pasted image 001.png" class="img-fluid center"></p>
						   <p><h6>What are cryptographic keys? </h6></p>
								  <p>A cryptographic key is simply a string of numbers and letters which are made by key generators also known as keygens. These keygens make use of a very advanced mathematics involving prime numbers to create these keys.
</p>
                                  <p><h6>Protocols </h6></p>
								  <p>The Blockchain comprises of individual behaviour specifications and a large set of rules that are progAlicemed into it. Those specifications are referred to as protocols. The implementation of individual protocols basically made Blockchain what it is (a distributed, peer-to-peer and secured information database).
</p>
                                  <p>The Blockchain protocols make sure that the network operates the way it was progAlicemed to by its creators, although it is completely autonomous and not controlled by anyone. Listed below are few samples of protocols implemented in Blockchain:
 </p>
                                   <p>· Input data for every hash number has to include the previous block’s hash number.</p>
                                   <p>·After every 210,000 blocks are sealed-off, the reward for successfully mining a block decreases by half.</p>
                                   <p>·Mining difficulty is recalculated every 2,016 blocks so that the amount of time needed to mine one block can be kept at approximately 10 minutes.</h6></p>
									<p>The placing of a transaction in a block is known as a successful conclusion to a proof of work challenge, and is carried out by special nodes called miners.</p>
								    <p>Proof of Work is a structure that requires some work from the service requester, which usually means the processing time by a computer. Producing a proof of work is a random process with low probability, so it involves a lot of trial and error to generate a valid proof of work. In Bitcoins, hash is what represent the proof of work.</p>
								    <p><h6>What is mining?</h6></p>
									<p>In Blockchain, miners are nodes that generate blocks by solving proof of work problems. If a miner generates a block that is accepted by an electronic consensus of nodes, then the miner is rewarded with coins. As of October 2017, Bitcoin miners get 12.5 Bitcoins per block.</p>
	                                <p>This reward is not the only incentive for miners to motivate them in running their hardware. They are also rewarded with the transaction fees that Bitcoin users pay. As there is a large amount of transactions currently happening within the Bitcoin network, the transaction fees have increased very rapidly. Although the fees are voluntary on the part of the sender, miners will always prioritize transfers with higher transaction fees. Therefore, your transaction might take a very long time to be processed unless you are willing to pay a rather high fee. </p>
								     <p><h6>Important points :-</h6></p>
									 <p>1. If you possess digital money then you need a digital wallet.</p>
                                     <p>2. A wallet is an address on the Blockchain.</p>
                                     <p>3. A wallet is a public key.</p>
                                     <p>4. Someone wanting to conduct a transaction must send a message with the transaction signed with their private key.</p>
                                     <p>5. Before a transaction is approved it is checked by every node who vote on it in a special electronic way that is different to the elections that most countries have.</p>
                                     <p>6. A transaction is placed in a block by miners who are special nodes.</p>
                                     <p>7. The computers in the network holding the Blockchain are called nodes.</p>
                                     <p>8. Miners place transactions in blocks in response to proof of work challenges.</p>
                                     <p>9. After miners successfully 'seal off' a block of transaction, they receive a reward, which currently stands at 12.5 BTC, and they also get to keep a transaction fees Bitcoin holders pay.</p>
                                     <p>10. Interaction is carried out on a Blockchain using rules built into the program of the Blockchain called protocols.</p>
                                     <p>11. Cryptography is essential on Blockchains to thwart thieves who would like to hack into the Blockchain.</p>
                                     <p>12. Cryptographic keys are made by key generators or keygens.</p>
                                     <p>13. Keygens use very advanced mathematics involving prime numbers to create keys.</p>
                                     <p>14. A block contains a timestamp, a reference to the previous block, the transactions and the computational problem that had to be solved before the block went on the Blockchain.</p>
                                     <p>15. The distributed network  of nodes that need to reach consensus makes fraud almost impossible within the Blockchain.</p>
                 <div class="transbox">
					<p><h3 class="mb-4">9.Problems solved by blockchain technology </h3></div></p>
								<p>We are now living in a truly revolutionary time of decentralization, cryptocurrencies, and tokenized economies. However, none of this would be possible if it were not for the development of the Blockchain.</p>
								 <p> So there is some example solved by blockchain technology.</p>
							<p><h4>Currency and Transaction Support</h4></p>
								 <p><img src="img/pasted image 002.png" class="img-fluid center"></p>
								 <p>Presently, sending money to someone either within the country or internationally (be it your local bank or PayPal account) requires the use of a third party. Is there anything bad about that? Well, these third parties usually charge huge fees, and transactions can take lots of time. More also, we must trust these third parties in not disclosing our personal data. It is also worth taking note that not everybody has access to banking services.</p>
								 <p>One out of many benefits of Blockchain technology is that these databases work continuously with cryptocurrencies, which are simply put digital cash secured by cryptography. Blockchain technology allows for people to send cryptocurrencies between each other as a transfer of value. This is done without the need of third parties.</p>
							<p><h4>Supply Chains and Item Histories.</h4></p>
								 <p><img src="img/pasted image 003.png" class="img-fluid center"></p>
								 <p>Have you ever been to a store or mall and be suspicious about whether or not an item or good of your choice was actually authentic? Could an expensive bottle of wine actually be a knockoff? This happens often in our society today. Thankfully, with the effect of Blockchain technology, the history of any good or item can be trace back to its source in such a way that it will be impossible to tamper with it unnoticeably.</p>
								 <p>With the help of Blockchain technology, we can easily find out where a product or good is made, by whom, and if the quality and condition of this product or good is of an acceptable quality</p>
							<p><h4>Voting:-</h4></p>
								 <p><img src="img/pasted image 005.png" class="img-fluid center"></p>
								 <p>Voting has always raise suspicions, most especially during tough presidential elections. This was exactly what happened with Hillary Clinton vs Donald Trump election in 2016, during which foreign intelligence agencies (for the most part, Russia) were accused of influencing the United States’ presidential election.</p>
								 <p>But if Blockchain technology were to be used for voting purposes, there would be no cause for alarm as to the results’ authenticity and legitimacy, simply because all entries in a decentralized ledger are immutable and irreversible.</p>
							<p><h4>Government Operations:-</h4></p>
	                             <p><img src="img/pasted image 006.png" class="img-fluid center"></p>
								 <p>When it comes down to politics and transparency, they don’t always go hand in hand with each other just like two parallel lines that will never meet. Government bodies have budgets and responsibilities that they need to carry out when it comes to their citizens. Presently, it is completely difficult to supervise everything that they do expense-wise and also difficult to make sure that the money is being spent ethically.</p>
                                  <p>Therefore, Blockchain technology usage in terms of political operations will allow us to ensure that no transactions or odd deals take place “off the books”. The transparency provided by the decentralized ledger will also assist in increasing the overall integrity.</p>
							<p><h4>Intellectual Property:-</h4></p> 
	                             <p><img src="img/pasted image 007.png" class="img-fluid center"></p>
								 <p>Today, piracy and theft of intellectual property such as movies, music, texts, and works of art is a huge problem. Lots of great artists and authors have had their contents leaked all over the internet with reduction in their anticipated revenues.</p>
								 <p>However, there will soon be opportunities for individuals to have the intellectual property rights to their contents with the help of certain Blockchain projects, regardless of where it ends up, and everyone else would be aware of this too.</p>
							<p><h4>Cloud Storage:-</h4></p> 
	                             <p><img src="img/pasted image 008.png" class="img-fluid center"></p>
								 <p>Presently, the cloud storage market is controlled by certain trustworthy organizations such as Google Drive, Dropbox, and among few others. However, it is risky and totally centralized for a single entity being in possession of all your files.</p>
								 <p>Thankfully, there are projects that use decentralization to encrypt and improve cloud storage security of your personal files using cryptography. This signifies that you are in full control of your data and only you who can access it.</p>
							<p><h4>Real Estate:-</h4></p> 
	                             <p><img src="img/pasted image 009.png" class="img-fluid center"></p>	
								 <p>When it comes to buying and selling of real estate, there are numerous issues attached with majority relating to fraud, transparency, and errors in public records.</p>
								 <p>Blockchain technology has made life easier with improvement in transaction speeds of buying and selling of real estate, as well as making record keeping more efficient and reliable by accepting the need to keep paper-based records that can be altered or lost.</p>
								 
				<div class="transbox">
					<p><h3 class="mb-4">10. What is future of blockchain technology ?</h3></div></p>	
                                 <p>Blockchain is still a very sensitive topic and its dynamics have proven to cause both a positive impact as well as negative. Here are just but a few examples of Block chain systems.</p>					
								 <p>So these are some examples of what is future of blockchain technology.</p>
								 <p></h6>Widespread Distributed Data Models</h6></p>
								 <p>Blockchain has highlighted a critical aspect of the way data is going to work in the coming decades, and that is a world where data will be ever increasingly distributed. Any solutions for next-generation data problems must come to grips with this fact, and plan for a day where critical data is distributed among many geographies and even across on-premise and cloud data centers.</p>
								 <p><h6>DLT-Based System</h6></p>
								 <p>Distributed ledger technology (DLT) is here to stay. Dubai has vowed to replace all government systems with DLT-based digital structures by 2020, which indicates that DLT will just grow over time. While the transition from a paper-based system to digital has been underway for a long time, DLT provides the underlying trust, immutability and transparency that such systems desperately need.</p>
								 <p><h6> Standardization And Collaboration</h6></p>
								 <p>One of the areas of advancement in blockchain will be the standardization of interoperability among the different blockchains. While it is inevitable that there will be several blockchains with a specific business purpose, true benefits for the consumer or enterprise will be realized when they are able to "collaborate" in an open standard.</p>
								 <p><h6> A Growing Need For Credible Crypto Backing.</h6></p>
								 <p>Money, regardless of whether it’s physical or digital, needs credible backing. When there are no trusted parties handling the transactions, then a distributed ledger becomes key, like blockchain. However, if a cryptocurrency is an official currency, then there are already technologies in place to ensure transactional integrity and prohibit tampering with transactional data. </p>
								 <p><h6> A Potential Ecosystem Of Specialized Chains</h6></p>
								 <p>Defunct crypto currencies have created a significant amount of “public technical debt,” and their smart-contracts might still get triggered. As we calibrate and confirm industry-grade blockchain use cases -- healthcare information exchange and crypto claims settlement, for example -- we will likely end up with an ecosystem of specialized chains, operating security and utility chains in parallel.</p>
								 <p><h6> Blockchain-Based Security Measures</h6></p>
								 <p>It is possible that with time, Blockchain will successfully grow towards a safer zone for its users in terms of their identity, how to transact, payments and so much more. This will be a potentially stable opportunity to research on and invest in.</p>
								 <p><h6>Crypto currency Is Just Going Through Normal Product Cycle.</h6></p>
                                 <p>Fluctuations of the economy does not make an industry unworthy. Losses and profits are normal and expected in any market. Same case applies to Crypto currency, accepting that it might have its downs helps you brace yourself and when the market is good, it will be great for those are well prepared. </p> 
						         <p><h6>Change of BlockChain towards Maturity</h6></p>
								 <p>It is important to understand that change is prone and there exists more than one crypto currency. The impact of distributed ledger technology is also larger than any folks understand -- it's the potential to alter social science, business and society, and we’re simply setting out to scratch the surface of what’s attainable.</p>
								 
								 
								 </div>
						</div>
					</div>						
					
											
						</div>
					</div>
				</div>	
			</section>
			<!-- Start gallery Area -->
			
			<!-- End gallery Area -->
													

			<!-- Start cta-two Area -->
			<section class="cta-two-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 cta-left">
							<h1>Not Yet Satisfied with our Trend?</h1>
						</div>
						<div class="col-lg-4 cta-right">
							<a class="primary-btn wh" href="#">view our blog</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End cta-two Area -->						    			

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>Top Products</h4>
                        <ul>
                            <li><a href="#">Managed Website</a></li>
                            <li><a href="#">Manage Reputation</a></li>
                            <li><a href="#">Course </a></li>
                            <li><a href="#">Road Map</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>Features</h4>
                        <ul>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Brand Assets</a></li>
                            <li><a href="#">Hackathons</a></li>
                            <li><a href="#">Events</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>Resources</h4>
                        <ul>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Research</a></li>
                            <li><a href="#">Experts</a></li>
                            <li><a href="#">Agencies</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>Newsletter</h4>
                        <p>Stay update with our latest</p>
                        <div class="" id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <span class="lnr lnr-arrow-right"></span>
                                        </button>
                                    </div>
                                    <div class="info"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom row align-items-center justify-content-between">
                <p class="footer-text m-0 col-lg-6 col-md-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://Xinfin.org" target="_blank">XinFin</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-6 col-sm-12 footer-social">
                    <a href="https://www.facebook.com/XinFinHybridBlockchain/"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/XinFin_Official"><i class="fa fa-twitter"></i></a>
                   
                    <a href="https://linkedin.com/in/xinfin"><i class="fa fa-linkedin"></i></a>
					<a href="https://www.youtube.com/channel/UCQaL6FixEQ80RJC0B2egX6g"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>
			<!-- End footer Area -->	


			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>