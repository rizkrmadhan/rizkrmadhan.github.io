<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rizki Ramadhan</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"
		integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<div class="medsos">
		<div class="container">
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="index.php">RIZKI RAMADHAN</a></h1>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="about.php">PENDIDIKAN</a></li>
				<li><a href="service.php">HOBI</a></li>
				<li class="active"><a href="contact.php">CONTACT</a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Beberapa Media Sosial Saya </p>
		</div>
	</section>

	<!-- service -->
	<section class="service">
		<div class="container">
			<h3>CONTACT INFO</h3>
			<div class="box">
				<div class="col-4">
					<h4>Address</h4>
					<p>Desa Prampelan, Karangrejo, Magetan</p>
				</div>
				<div class="col-4">
					<h4>Email</h4>
					<p>rizkiramadhan3020@gmail.com</p>
				</div>
				<div class="col-4">
					<h4>Hp</h4>
					<p>083845325717</p>
				</div>
				<div class="col-4">
					<h4>GitHub</h4>
					<p>https://github.com/rizkrmadhan/rizkrmadhan</p>
				</div>
	</section>

	<!-- icon -->
	<!-- <div class="service">
		<div class="box">
			<div class="col-4">
				<a href="https://youtube.com/@rizkiramadhan3988?si=93RKxCCZ1y-Cg3DY" target="blank">
					<img src="icon/3721679-youtube_108064.ico" /></p>
			</div>
			<div class="col-4">
				<div class="img-card"><a href="https://instagram.com/rizkrmadhn?igshid=MzMyNGUyNmU2YQ==" target="blank">
						<img src="icon/3721672-instagram_108066.ico" /></p>
				</div>
			</div>
			<div class="col-4">
				<div class="img-card"><a href="https://Wa.me/083845325717" target="blank">
						<img src="icon/Whatsapp_icon-icons.com_66931.ico" /></p>
				</div>
			</div>
			<div class="col-4">
				<div class="img-card"><a href="https://www.facebook.com/profile.php?id=100011011746178&mibextid=ZbWKwL"
						target="blank">
						<img src="icon/facebook_logo_icon_147291.ico" /></p>
				</div>
			</div>
		</div>
	</div> -->

		<section id="contact">
    <div class="contact main-container">
        <div class="contact-left">
            <form class="contact-form" action="process.php" method="POST">
               <div>
                <input type="text" placeholder="Name" name="name">
               </div>
               <div>
                <input type="email" placeholder="Email" name="email">
               </div>
               <div>
                <textarea 
                name="message" 
                id="message"
                placeholder="Message" 
                cols="30" 
                rows="10"
                ></textarea>
               </div>
               <div>
                <button class="btn-submit">Send Message</button>
               </div>
            </form>
        </div>
        <div class="contact-right">
            <!-- contact item 1 -->
            <div class="contact-item">
                <div class="contact-item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 19c4.5-3.893 8-6.872 8-11.23 0-4.291-3.582-7.77-8-7.77s-8 3.479-8 7.77c0 4.358 3.5 7.337 8 11.23zm-5.761-10h2.761v-2h-2.786c.393-2.446 2.324-4.379 4.786-4.799v2.799h2v-2.799c2.462.42 4.393 2.353 4.786 4.799h-2.786v2h2.761c-.452 2.368-2.354 4.223-4.761 4.632v-2.632h-2v2.632c-2.406-.409-4.309-2.264-4.761-4.632zm13.761 7h-1.801c-.629.673-1.316 1.335-2.041 2h2.605l.5 1h-4.218l-1.146 1h1.025l.858 2h-7.487l.858-2h.947c-.389-.336-.772-.669-1.147-1h-1.995l-1.011-1h1.895c-.725-.664-1.41-1.327-2.039-2h-1.803l-4 8h24l-4-8zm-12.794 6h-3.97l1.764-3.528 1.516 1.528h1.549l-.859 2zm8.808-2h3.75l1 2h-3.892l-.858-2z"/></svg>
                </div>
            <div class="contact-item-detail">
                <h4>Address</h4>
                <p>Jl.Kaswari Desa.Mojopurno,Kec.Wungu</p>
            </div>
            </div>
            <!-- contact item 2 -->
            <div class="contact-item">
                <div class="contact-item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-7.202 3.755 4.233 25.982 11.6 22.615.121-.055 2.102-1.029 2.11-1.033z"/></svg>
                </div>
            <div class="contact-item-detail">
                <h4>Phone</h4>
                <p>+62 858-522-xxx</p>
            </div>
            </div>
            <!-- contact item 3 -->
            <div class="contact-item">
                <div class="contact-item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z"/></svg>
                </div>
            <div class="contact-item-detail">
                <h4>Email</h4>
                <p>henditokristian@gmail.com</p>
            </div>
            </div>

        </div>
    </div>
</section>

		<!-- footer -->
		<footer>
			<div class="container">
				<small>Copyright &copy; 2023 - RizkiRamadhan. All Rights Reserved.</small>
			</div>
		</footer>
		<script type="text/javascript">
			$(document).ready(function () {
				$(".bg-loader").hide();
			})
		</script>
</body>
</html>