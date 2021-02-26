			<?php
   				include 'component/header.php';
   			?>

			<!--BUNNER-->
			<div class="rectangle_1">
				<img id="bannershoes" src="images/Rectangle 2.png" width="878px" height="137px"/>
				<p class="btextshoes">Shoes</p>
			</div>


			<div class="home_link">
				<p><a id="home" href="http://myshop/index.php">Home </a>&gt Shoes</p>
			</div>

			
			<div class="filter_option">
				<div class="filter">
					<p>Filter by:     
						<button class="size_btn">XL</button>
						<button class="size_btn">L</button>
						<button class="size_btn">S</button>
						<button class="size_btn">XS</button>
						<button class="color_btn">Black</button>
						<button class="color_btn">Brown</button>
						<button class="color_btn">Grey</button>
						<button class="color_btn">White</button></p>
				</div>

				<select class="filter_list" size="1">
					<option>Price High-Low</option>
					<option>Price Low-High</option>
					<option>Popular</option>
					<option>Stock</option>
				</select>
			</div>	


				<?php if ($_GET['page'] == 1): ?>
			<!--Products 1-3-->
						<div class="containershoes">

					<!--Product 1-->
					<div class="card">

						<div class="product_image">
							<img class="img_prod" src="images/shoes.png" width="198px" height="195px"/>
						</div>


						<div class="product_size">
							<p><b>Size:     
							<button class="size_btn">XS</button>
							<button class="size_btn">S</button>
							<button class="size_btn">L</button>
							<button class="size_btn">XL</button></b></p>
						</div>


						<div class="product_color">
							<p><b>Color:
							<button class="color_btn">Black</button></b></p>
						</div>


						<div class="product_description">
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
						</div>


						<div class="quantity">
							<input class="input_size"></input>
							<button class="btn_addtocart">Add to cart</button>
						</div>
				
					</div>



					<!--Product 2-->
					<div class="card">

						<div class="product_image">
							<img class="img_prod" src="images/shoes.png" width="198px" height="195px"/>
						</div>


						<div class="product_size">
							<p><b>Size:     
							<button class="size_btn">XS</button>
							<button class="size_btn">S</button>
							<button class="size_btn">L</button>
							</b></p>
						</div>


						<div class="product_color">
							<p><b>Color:
							<button class="color_btn">Black</button></b></p>
						</div>


						<div class="product_description">
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
						</div>


						<div class="quantity">
							<input class="input_size"></input>
							<button class="btn_addtocart">Add to cart</button>
						</div>


					</div>



					<!--Product 3-->
					<div class="card">

						<div class="product_image">
							<img class="img_prod" src="images/shoes.png" width="198px" height="195px"/>
						</div>


						<div class="product_size">
							<p><b>Size:     
							<button class="size_btn">XS</button>
							<button class="size_btn">S</button>
							<button class="size_btn">XL</button></b></p>
						</div>


						<div class="product_color">
							<p><b>Color:
								<button class="color_btn">Black</button>
								<button class="color_btn">White</button></b></p>
						
						</div>


						<div class="product_description">
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
						</div>


						<div class="quantity">
							<input class="input_size"></input>
							<button class="btn_addtocart">Add to cart</button>
						</div>

					</div>
		
			</div>


			<!--Products 4-6-->
			<div class="container">

					<!--Product 4-->
					<div class="card">

						<div class="product_image">
							<img class="img_prod" src="images/shoes.png" width="198px" height="195px"/>
						</div>


						<div class="product_size">
							<p><b>Size:     
							<button class="size_btn">XS</button>
							<button class="size_btn">S</button>
							<button class="size_btn">L</button>
							<button class="size_btn">XL</button></b></p>
						</div>


						<div class="product_color">
							<p><b>Color:
							<button class="color_btn">Black</button></b></p>
						</div>


						<div class="product_description">
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
						</div>


						<div class="quantity">
							<input class="input_size"></input>
							<button class="btn_addtocart">Add to cart</button>
						</div>
				
					</div>



					<!--Product 5-->
					<div class="card">

						<div class="product_image">
							<img class="img_prod" src="images/shoes.png" width="198px" height="195px"/>
						</div>


						<div class="product_size">
							<p><b>Size:     
							<button class="size_btn">XS</button>
							<button class="size_btn">S</button>
							<button class="size_btn">L</button>
							</b></p>
						</div>


						<div class="product_color">
							<p><b>Color:
							<button class="color_btn">Black</button></b></p>
						</div>


						<div class="product_description">
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
						</div>


						<div class="quantity">
							<input class="input_size"></input>
							<button class="btn_addtocart">Add to cart</button>
						</div>


					</div>



					<!--Product 6-->
					<div class="card">

						<div class="product_image">
							<img class="img_prod" src="images/shoes.png" width="198px" height="195px"/>
						</div>


						<div class="product_size">
							<p><b>Size:     
							<button class="size_btn">XS</button>
							<button class="size_btn">S</button>
							<button class="size_btn">XL</button></b></p>
						</div>


						<div class="product_color">
							<p><b>Color:
								<button class="color_btn">Black</button>
								<button class="color_btn">White</button></b></p>
						
						</div>


						<div class="product_description">
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
						</div>


						<div class="quantity">
							<input class="input_size"></input>
							<button class="btn_addtocart">Add to cart</button>
						</div>

					</div>
		
			</div>
			<?php endif ?>

			<?php if ($_GET['page'] == 2): ?>

				<!--Products 7-9-->
						<div class="containershoes">

					<!--Product 7-->
					<div class="card">

						<div class="product_image">
							<img class="img_prod" src="images/shoes1.png" width="198px" height="195px"/>
						</div>


						<div class="product_size">
							<p><b>Size:     
							<button class="size_btn">XS</button>
							<button class="size_btn">S</button>
							<button class="size_btn">XL</button></b></p>
						</div>


						<div class="product_color">
							<p><b>Color:
							<button class="color_btn">Black</button></b>
							<button class="color_btn">Brown</button></b></p>
						</div>


						<div class="product_description">
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
						</div>


						<div class="quantity">
							<input class="input_size"></input>
							<button class="btn_addtocart">Add to cart</button>
						</div>
				
					</div>



					<!--Product 8-->
					<div class="card">

						<div class="product_image">
							<img class="img_prod" src="images/shoes1.png" width="198px" height="195px"/>
						</div>


						<div class="product_size">
							<p><b>Size:     
							<button class="size_btn">S</button>
							<button class="size_btn">L</button>
							</b></p>
						</div>


						<div class="product_color">
							<p><b>Color:
							<button class="color_btn">Black</button></b>
							<button class="color_btn">Brown</button></b></p>
						</div>


						<div class="product_description">
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
						</div>


						<div class="quantity">
							<input class="input_size"></input>
							<button class="btn_addtocart">Add to cart</button>
						</div>


					</div>



					<!--Product 9-->
					<div class="card">

						<div class="product_image">
							<img class="img_prod" src="images/shoes1.png" width="198px" height="195px"/>
						</div>


						<div class="product_size">
							<p><b>Size:     
							<button class="size_btn">XS</button>
							<button class="size_btn">S</button>
							<button class="size_btn">L</button>
							<button class="size_btn">XL</button></b></p>
						</div>


						<div class="product_color">
							<p><b>Color:
								<button class="color_btn">Black</button>
								<button class="color_btn">Brown</button></b></p>
						
						</div>


						<div class="product_description">
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
						</div>


						<div class="quantity">
							<input class="input_size"></input>
							<button class="btn_addtocart">Add to cart</button>
						</div>

					</div>
		
			</div>


			<!--Products 10-12-->
			<div class="container">

					<!--Product 10-->
					<div class="card">

						<div class="product_image">
							<img class="img_prod" src="images/shoes1.png" width="198px" height="195px"/>
						</div>


						<div class="product_size">
							<p><b>Size:     
							<button class="size_btn">L</button>
							<button class="size_btn">XL</button></b></p>
						</div>


						<div class="product_color">
							<p><b>Color:
							<button class="color_btn">Grey</button></b></p>
						</div>


						<div class="product_description">
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
						</div>


						<div class="quantity">
							<input class="input_size"></input>
							<button class="btn_addtocart">Add to cart</button>
						</div>
				
					</div>



					<!--Product 11-->
					<div class="card">

						<div class="product_image">
							<img class="img_prod" src="images/shoes1.png" width="198px" height="195px"/>
						</div>


						<div class="product_size">
							<p><b>Size:     
							<button class="size_btn">XS</button>
							<button class="size_btn">L</button>
							<button class="size_btn">XL</button>
							</b></p>
						</div>


						<div class="product_color">
							<p><b>Color:
							<button class="color_btn">Grey</button></b>	
							<button class="color_btn">White</button></b></p>
						</div>


						<div class="product_description">
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
						</div>


						<div class="quantity">
							<input class="input_size"></input>
							<button class="btn_addtocart">Add to cart</button>
						</div>


					</div>



					<!--Product 12-->
					<div class="card">

						<div class="product_image">
							<img class="img_prod" src="images/shoes1.png" width="198px" height="195px"/>
						</div>


						<div class="product_size">
							<p><b>Size:     
							<button class="size_btn">XS</button>
							<button class="size_btn">S</button>
							<button class="size_btn">L</button></b></p>
						</div>


						<div class="product_color">
							<p><b>Color:
								<button class="color_btn">Black</button>
								<button class="color_btn">Brown</button></b></p>
						
						</div>


						<div class="product_description">
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
						</div>


						<div class="quantity">
							<input class="input_size"></input>
							<button class="btn_addtocart">Add to cart</button>
						</div>

					</div>
		
			</div>

		<?php endif ?>


		<?php if ($_GET['page'] == 3): ?>

			<!--Products 13-14-->
			<div class="container">

					<!--Product 13-->
					<div class="card">

						<div class="product_image">
							<img class="img_prod" src="images/shoes2.png" width="198px" height="195px"/>
						</div>


						<div class="product_size">
							<p><b>Size:     
							<button class="size_btn">S</button>
							<button class="size_btn">L</button>
							<button class="size_btn">XL</button></b></p>
						</div>


						<div class="product_color">
							<p><b>Color:
							<button class="color_btn">Brown</button></b></p>
						</div>


						<div class="product_description">
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
						</div>


						<div class="quantity">
							<input class="input_size"></input>
							<button class="btn_addtocart">Add to cart</button>
						</div>
				
					</div>



					<!--Product 14-->
					<div class="card">

						<div class="product_image">
							<img class="img_prod" src="images/shoes2.png" width="198px" height="195px"/>
						</div>


						<div class="product_size">
							<p><b>Size:     
							<button class="size_btn">XS</button>
							<button class="size_btn">L</button>
							<button class="size_btn">XL</button>
							</b></p>
						</div>


						<div class="product_color">
							<p><b>Color:
							<button class="color_btn">Grey</button></b>
							<button class="color_btn">Brown</button></b></p>
						</div>


						<div class="product_description">
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
						</div>


						<div class="quantity">
							<input class="input_size"></input>
							<button class="btn_addtocart">Add to cart</button>
						</div>

					</div>
						
			</div>
			
		<?php endif ?>





			<div class="pages">
				<nav class="pagination">
					<p class="page">Page:
					<?php if ($_GET['page'] != 1): ?>	
						<a href="http://myshop/shoes.php?page=1">1</a>
					<?php else: ?>
						<span>1</span>
					<?php endif ?>

					<?php if ($_GET['page'] != 2): ?>	
						<a href="http://myshop/shoes.php?page=2">2</a>
					<?php else: ?>
						<span>2</span>
					<?php endif ?>

					<?php if ($_GET['page'] != 3): ?>	
						<a href="http://myshop/shoes.php?page=3">3</a>
					<?php else: ?>
						<span>3</span>
					<?php endif ?>
					
					<a href="#">...</a>
					<a href="#">≥</a></p>
				</nav>
			</div>	



   			<footer>
   				<div class="footershoes">
   					
   			<?php
   				include 'component/footer.php';
   			?>