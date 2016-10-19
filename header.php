<!DOCTYPE html>
<html <?php language_attributes() ?>
<head>
	<meta charset="<?php bloginfo('charset') ?>" />
	<title><?php wp_title('-', true, 'right'); bloginfo() ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/assets/css/style.css">	
   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->	
	<?php wp_head(); ?>	
</head>
<body>
	<div class="wrap">
		<div class="propaganda">
			<div class="container">
				<a href="#">
					<img src="<?php bloginfo('template_url')?>/assets/imgs/banner.png" alt="">
				</a>
			</div>
		</div>
		<header class="header">
			<a href="#" class="button-container" id="toggle">
				<span class="top"></span> 
				<span class="middle"></span> 
				<span class="bottom"></span>
			</a>
			<div class="row">
				<div class="logo">
					<a href="<?php the_permalink('home'); ?>">
						<img src="<?php bloginfo('template_url')?>/assets/imgs/logo.png" alt="">
					</a>
				</div>
				<div class="main-menu">
					<ul>
						<li class="page-item page_item_has_children">
							<a href="#">carros<i class="icon" data-icon="a"></i></a>						   
							<ul class="children">
								<li class="page_item"><a href="#">Audi</a></li> 
								<li class="page_item"><a href="#">Bentley</a></li> 
								<li class="page_item"><a href="#">BMW</a></li> 
								<li class="page_item"><a href="#">Chevrolet</a></li> 
								<li class="page_item"><a href="#">Chrysler</a></li> 
								<li class="page_item"><a href="#">Dodge</a></li> 
								<li class="page_item"><a href="#">Ferrari</a></li> 
								<li class="page_item"><a href="#">Fiat</a></li> 
								<li class="page_item"><a href="#">Ford</a></li> 
								<li class="page_item"><a href="#">Honda</a></li> 
								<li class="page_item"><a href="#">Hyundai</a></li> 
								<li class="page_item"><a href="#">Jac Motors</a></li> 
								<li class="page_item"><a href="#">Jaguar</a></li> 
								<li class="page_item"><a href="#">Jipe</a></li> 
								<li class="page_item"><a href="#">Kia</a></li> 						      
								<li class="page_item"><a href="#">Lamborghini</a></li> 
								<li class="page_item"><a href="#">Mercedez-Benz</a></li> 
								<li class="page_item"><a href="#">Mitsubishi</a></li> 
								<li class="page_item"><a href="#">Volkswagen</a></li> 
							</ul>
						</li>
						<li class="page-item page_item_has_children">
							<a href="#">testes<i class="icon" data-icon="a"></i></a>
							<ul class="children">
								<li class="page_item first_children">
									<a href="#">Ver tudo de testes <i class="icon" data-icon="d"></i></a>
									<a href="#">Comparativo</a>
									<a href="#">Impressões</a> 
									<a href="#">Longa duração</a>
									<a href="#">Testes de pista</a>      
								</li> 
								<li class="page_item">
									<a href="#">
										<figure>
											<img src="<?php bloginfo('template_url')?>/assets/imgs/honda-cr-v-1.jpeg" alt="">
										</figure>
										<p>Ford focus fastaback tinanium premium plus</p>
									</a>      
								</li> 						      
								<li class="page_item">
									<a href="#">
										<figure>
											<img src="<?php bloginfo('template_url')?>/assets/imgs/honda-cr-v-1.jpeg" alt="">
										</figure>
										<p>Audi A6 2.0 TFSI</p>
									</a>      
								</li> 						      
								<li class="page_item">
									<a href="#">
									   <figure>
											<img src="<?php bloginfo('template_url')?>/assets/imgs/honda-cr-v-1.jpeg" alt="">
										</figure>								
										<p>Ford Ecosport 1.6 Powershift</p>										
									</a>      
								</li> 						      
								<li class="page_item">
									<a href="#">
										<figure>
											<img src="<?php bloginfo('template_url')?>/assets/imgs/honda-cr-v-1.jpeg" alt="">
										</figure>
										<p>Audi Q3 1.4</p>
									</a>      
								</li> 						      
								<li class="page_item">
									<a href="#">
										<figure>
											<img src="<?php bloginfo('template_url')?>/assets/imgs/honda-cr-v-1.jpeg" alt="">
										</figure>
										<p>BMW 420i Cabriolet</p>
									</a>      
								</li> 						      
						  </ul>
						</li>
						<li class="page-item">
							<a href="#">noticias<i class="icon" data-icon="a"></i></a>
						</li>
						<li class="page-item">
							<a href="#">auto-serviço<i class="icon" data-icon="a"></i></a>
						</li>
						<li class="page-item">
							<a href="#">guia de compras</a>
						</li>
						<li class="page-item">
							<a href="#">tabela fipe<i class="icon" data-icon="a"></i></a>
						</li>
						<li class="page-item">
							<a href="#">assine</a>
						</li>
					</ul>
				</div>
				<div class="search-container">
					<div class="search-content">
						<input type="text" placeholder="PESQUISAR" class="search-item">
						<button type="submit" class="search-btn"><i class="icon search-icon" data-icon="c"></i></button>
					</div>
				</div>
				<div class="second-menu">
					<ul>
						<li>				
							<?php wp_list_pages('title_li=&orderby'); ?>
						</li>
					</ul>
				</div>		
			</div>
		</header>