<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thais Nakamura Beauty</title>
    <!-- Text font -->
    <link rel="stylesheet" href="css/style.css/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- Icons Font -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
    />
	<style>
	:root {
    --primary: #ee88cc;
    --secondary: #95989a;
    --text-color: #fff;
    --text-secondary: #000;
    --text-tertiary: #5d5d5d;
  }
  
  * {
    font-family: "Montserrat";
    margin: 0;
    padding: 0;
  }

  input[type="submit"]{
    background-color:#ee88cc;
    color: azure;
    border: none;
    border-radius: 20px;
    height: 40px;
    cursor: pointer;
}
  
  /* Event form */
  #event-subscription {
    background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
      url("../img/hrz-5.jpg");
    background-position: center;
    background-size: cover;
    height: 85vh;
    display: flex;
    justify-content: space-around;
    align-items: center;
    color: var(--text-color);
    border-radius: 200px;
  }
  
  #disclaimer h2,
  #disclaimer .event-date {
    color: var(--primary);
  }
  
  #disclaimer h2 {
    font-size: 3em;
    margin-bottom: 1em;
  }
  
  #disclaimer .about-event {
    font-size: 2em;
    text-transform: uppercase;
    max-width: 350px;
    font-weight: bold;
    margin-bottom: 1em;
  }
  
  #disclaimer p {
    font-size: 1.2em;
    margin-bottom: 0.3em;
  }
  
  #disclaimer .event-date {
    font-weight: bold;
  }
  
  #subscription-form {
    background-color: var(--secondary);
    padding: 2em;
    max-width: 22%;
  }
  
  #subscription-form p {
    font-size: 1.5em;
    color: var(--text-secondary);
    margin-bottom: 1em;
  }
  
  .form-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 0.8em;
  }
  
  .form-group label {
    color: var(--text-tertiary);
    margin-bottom: 0.3em;
    font-weight: bold;
  }
  
  .form-group input,
  .form-group select {
    padding: 6px 8px;
    border-radius: 5px;
    border: none;
    outline: none;
  }
  
  .btn {
    background-color: var(--primary);
    color: var(--text-color);
    text-transform: uppercase;
    width: 100%;
    padding: 12px;
    border: none;
    cursor: pointer;
    opacity: 0.8;
  }
  
  .btn:hover {
    opacity: 1;
  }
  
  /* Benefits section */
  #key-benefits h2 {
    background-color: var(--secondary);
    text-align: center;
    padding: 2em;
    font-weight: 500;
  }
  
  .benefits {
    display: flex;
    justify-content: space-around;
    padding: 4em;
    width: 80%;
    margin: 0 auto;
  }
  
  .benefit {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    max-width: 20%;
    color: var(--text-tertiary);
  }
  
  .benefit .benefit-img {
    width: 250px;
    height: 250px;
    border-radius: 50%;
    background-size: cover;
    background-position: center;
    margin-bottom: 1em;
  }
  
  #benefit-1 {
    background-image: url("../img/sqr-1.jpg");
  }
  
  #benefit-2 {
    background-image: url("../img/sqr-2.jpg");
  }
  
  #benefit-3 {
    background-image: url("../img/sqr-3.jpg");
  }
  
  /* Event location */
  #location {
    height: 400px;
    background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
      url("../img/hrz-1.jpg");
    background-position: center;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: space-around;
    color: var(--text-color);
    margin-bottom: 3em;
  }
  
  #address,
  #about-location {
    max-width: 30%;
  }
  
  #address {
    display: flex;
  }
  
  #address i {
    color: var(--primary);
    font-size: 4em;
    margin-right: 0.5em;
  }
  
  #address-details {
    text-align: center;
    font-size: 1.3em;
  }
  
  #about-location h3 {
    color: var(--primary);
    font-size: 2.5em;
    margin-bottom: 1em;
    text-transform: uppercase;
  }
  
  #about-location p {
    line-height: 1.5em;
  }
  
  /* Event details container */
  #details {
    width: 80%;
    margin: 0 auto;
  }
  
  .detail {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 5%;
    margin-bottom: 4em;
  }
  
  .detail img {
    width: 50%;
  }
  
  .detail h3 {
    margin-bottom: 1em;
    font-size: 2em;
    font-weight: 500;
  }
  
  #detail-1 h3 {
    font-size: 3em;
    font-weight: 700;
  }
  
  .detail-description {
    width: 100%;
    padding-left: 2em;
  }
  
  #detail-3 .detail-description {
    justify-self: flex-start;
  }
  
  .detail-description ul {
    list-style-position: inside;
  }
  
  .detail-description ul li {
    margin-bottom: 0.4em;
  }
  
  .detail-description ul li:last-child {
    font-weight: bold;
  }
  
  /* Call to Action Section */
  #cta {
    height: 300px;
    background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
      url("../img/hrz-6.jpg");
    background-position: center;
    background-size: cover;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
    color: var(--text-color);
  }
  
  #cta h3 {
    margin-bottom: 1.2em;
    font-size: 2em;
    font-weight: 500;
  }
  
  #cta .btn {
    width: 30%;
    margin: 0 auto;
    font-weight: 600;
    font-size: 1.2em;
  }
  
  /* Footer */
  #footer {
    text-align: center;
    color: var(--secondary);
    height: 250px;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  
  #footer h3 {
    font-size: 1.8em;
    margin-bottom: 0.5em;
  }
  
  #footer p:nth-child(2) {
    margin-bottom: 1em;
    font-size: 1.2em;
  }
  
  #footer span {
    font-weight: bold;
  }
  
  /* Mobile */
  @media (max-width: 450px) {
    /* Event form */
    #event-subscription {
      flex-direction: column;
      height: auto;
    }
  
    #disclaimer {
      padding: 2em;
    }
  
    #disclaimer h2 {
      margin-bottom: 0.5em;
    }
  
    #subscription-form {
      max-width: 70%;
      margin-bottom: 2em;
    }
  
    /* Benefits section */
    .benefits {
      flex-direction: column;
      align-items: center;
      width: auto;
      padding: 2em;
    }
  
    .benefit {
      max-width: 100%;
      margin-bottom: 2em;
    }
  
    /* Event location */
    #location {
      flex-direction: column;
      height: auto;
      text-align: center;
      padding: 2em 0;
    }
  
    #address {
      order: 2;
      flex-direction: column;
      max-width: 100%;
    }
  
    #address i {
      margin: 0.3em 0;
    }
  
    #about-location {
      order: 1;
      max-width: 100%;
    }
  
    #about-location h3 {
      margin-bottom: 0;
    }
  
    #about-location p {
      display: none;
    }
  
    /* Event details container */
    .detail {
      flex-direction: column;
      margin-bottom: 0.5em;
      gap: 0;
    }
  
    .detail img {
      width: 100%;
      margin: 2em 0;
    }
  
    #detail-1 img {
      display: none;
    }
  
    .detail-description {
      padding: 0;
    }
  
    #detail-3 img {
      order: 2;
    }
  
    #detail-3 .detail-description {
      order: 1;
    }
  
    /* Call to Action Section */
    #cta .btn {
      width: 80%;
    }
  } 
</style>
  </head>
  <body>
    <header id="event-subscription">
      <div id="disclaimer">
        <h2>Thais Nakamura Beauty</h2>
        <p class="about-event">
          Um São de beleza que veio para revolucionar sua auto estima
        </p>
        <p>Data da inauguração:</p>
        <p class="event-date">Segunda-feira, 13 de Junho, a partir das 9h</p>
      </div>
      <div id="subscription-form">
        <p>Preencha o formulário para receber os nossos preços imperdiveis</p>
        <form>
          <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" placeholder="Digite seu nome" />
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu melhor e-mail" />
          </div>
          <div class="form-group">
            <label for="phone">Celular</label>
            <input type="text" placeholder="Número de Whatsapp" />
          </div>
          <div class="form-group">
            <label for="interest">Principal interesse</label>
            <select name="interest">
              <option value="" disabled selected>Selecione</option>
              <option value="nails">Unhas</option>
              <option value="hairstyles">Penteados</option>
              <option value="afro hair">Cabelos Afro</option>
              <option value="braids">Tranças</option>
            </select>
          </div>
          <input type="submit" class="btn" value="Quero me inscrever" />
        </form>
      </div>
    </header>
    <section id="key-benefits">
      <h2>O nosso trabalho consciente em:</h2>
      <div class="benefits">
        <div class="benefit">
          <div id="benefit-1" class="benefit-img"></div>
          <p>
						NaiLs Sensacionais, que vai fazer a diferença na vida das
						clientes.
          </p>
        </div>
        <div class="benefit">
          <div id="benefit-2" class="benefit-img"></div>
          <p>
            Penteados lindos, que vai fazer a diferença na vida das
            Clientes.
          </p>
        </div>
        <div class="benefit">
          <div id="benefit-3" class="benefit-img"></div>
          <p>
            Tranças da atualidade, que vai fazer a diferença na vida das
            Clientes.
          </p>
        </div>
      </div>
    </section>
    <section id="location">
      <div id="address">
        <i class="bi bi-geo-alt-fill"></i>
        <div id="address-details">
          <p>Rua Dona Lucília,L:14 Q:10</p>
          <p>Bairro: Jardim queimados - Queimados -RJ</p>
          <p>Abertura: 9h</p>
        </div>
      </div>
      <div id="about-location">
        <h3>Local</h3>
        <p>
				 Local de Facil acesso a todos os Bairros de queimados e outros municipios, 
				 estrada de acesso a rua asfaltada, segurança estavel e um ambiente muito agradavel
				 a todos os nossos clientes!
        </p>
      </div>
    </section>
    <section id="details">
      <div class="detail" id="detail-1">
        <img src="img/" alt="" />
        <div class="detail-description">
          <h3>Conheça o ambiente </h3>
        </div>
      </div>
	  <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="index.php">Página Inicial</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
    <section id="cta">
      <h3>Gostou? Então se inscreva:</h3>
      <button class="btn">Solicitar Inscrição</button>
    </section>
    <footer id="footer">
      <h3>Thais nakamura Beauty</h3>
      <p>A evolução da auto estima da mulher</p>
      <p><span>Entre em contato:</span> </p>
      <p><span>Ou pelo Celular:</span></p>
    </footer>
  </body>
</html>