<!doctype html>
<html>

	<head>
		<title>Sobre a Mirror Fashion</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/sobre.css">
		<link rel="stylesheet" href="css/estilos.css">	
		<link rel="stylesheet/less" href="less/teste.less">	
	</head>

	<body>
		<header class="container">
			<h2><img src="img/logo.png" alt="Mirror Fashion"></h2>

			<p class="sacola">
				Nenhum item na sacola de compras
			</p>

			<nav class="menu-opcoes">
				<ul>
					<li><a href="#">Sua conta</a></li>
					<li><a href="#">Lista de Desejos</a></li>
					<li><a href="#">Cartão Fidelidade</a></li>
					<li><a href="sobre.html">Sobre</a></li>
					<li><a href="#">Ajuda</a></li>
				</ul>
			</nav>
		</header>

		<h1>Mirror Fashion</h1>
		<p>
		 	A <strong>Mirror Fashion</strong> é a maior empresa comércio eletrônico no segmento de moda em todo o mundo. 
			Fundada há <?php print date('Y')-1932?> anos, possui filiais em 124 países, sendo líder de mercado com mais de 90% de 
			participação em 118 deles.
		</p>
		<p>		
			Nosso centro de distribuição fica em <a href="https://maps.google.com.br/?q=Jacarezinho">Jacarezinho, no Paraná</a>. De lá, saem 48 aviões que 
			distribuem nossos produtos às casas do mundo todo. Nosso centro de distribuição:
			
			Compre suas roupas e acessórios na Mirror Fashion. Acesse <a href="index.html">nossa loja</a> ou entre em contato 
			se tiver dúvidas. Conheça também nossa <a href="#historia">história</a> e nossos <a href="#diferenciais">diferenciais</a>.		
		</p>	

		<figure id="centro-distribuicao">
			<img src="img/centro-distribuicao.png">
			<figcaption>Centro de distribuicao</figcaption>	
		</figure>

		<h2 id="historia">História</h2>

		<figure id="familia-pelho"   >
			<img src="img/familia-pelho.jpg">
			<figcaption>Familia Pelho</figcaption>	
		</figure>
		<p>
			A fundação em 1932 ocorreu no momento da descoberta econônica do interior do Paraná. A 
			família Pelho, tradicional da região, investiu todas as suas economias nessa nova iniciativa, 
			revolucionária para a época. O fundador <em>Eduardo Simões Pelho</em>, dotado de particular visão 
			administrativa, guiou os negócios da empresa durante mais de 50 anos, muitos deles ao lado 
			de seu filho <em>E. S. Pelho Filho</em>, atual CEO. O nome da empresa é inspirado no nome da família.
		</p>
		<p>
			O crescimento da empresa foi praticamente instantâneo. Nos primeiros 5 anos, já atendia 18 países.
		</p>
		<p>
			Bateu a marca de 100 países em apenas 15 anos de existência. Até hoje, já atendeu 740 milhões 
			de usuários diferentes, em bilhões de diferentes pedidos.
		</p>
		<p>
			O crescimento em número de funcionários é também assombroso. Hoje, é a maior empregadora do 
			Brasil, mas mesmo após apenas 5 anos de sua existência, já possuía 30 mil funcionários. Fora do 
			Brasil, há 240 mil funcionários, além dos 890 mil brasileiros nas instalações de Jacarezinho e 
			nos escritórios em todo país.
		</p>	
		<p>
			Dada a importância econômica da empresa para o Brasil, a família Pelho já recebeu diversos prêmios, 
			homenagens e condecorações. Todos os presidentes do Brasil já visitaram as instalações da Mirror 
			Fashion, além de presidentes da União Européia, Ásia e o secretário-geral da ONU.
		</p>
		<h2 id="diferenciais">Diferenciais</h2>
		<u1>
			<li>Pague em reais, dólares, euros ou bitcoins</li>
			<li>Todas as compras com frete grátis para o mundo todo</li>
			<li>Maior comércio eletrônico de moda do mundo</li>
			<li>Atendimento via telefone, email, chat, twitter, facebook, carta, fax e telegrama</li>
			<li>Presente em 124 países</li>
			<li>Mais de um milhão de funcionários em todo o mundo</li>
		</u1>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58777.760471092144!2d-43.4455872870636!3d-22.964584810905066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bdc3ddbe14241%3A0xee7a910cdf26615c!2sCamorim%2C+Rio+de+Janeiro+-+RJ!5e0!3m2!1spt-BR!2sbr!4v1495142996641" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		<input type="number">
		<input type="button" id="botao">
		<div class="opcoes">
		</div>

		<div id="rodape">
			<img src="img/logo.png">
			&copy; Copyright Mirror Fashion
		</div>

		<script src="js/jquery.js"></script>	
		<script src="js/sobre.js"></script>	
		<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>	
	</body>
</html>