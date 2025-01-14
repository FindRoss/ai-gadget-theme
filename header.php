<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header>
		<div class="container">

			<div class="nav-layout">

				<div class="site-branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<svg xmlns="http://www.w3.org/2000/svg" width="171" height="62" viewBox="0 0 171 62" fill="none">
							<path d="M13.972 47.028H6.636L5.46 50.5H0.448L7.56 30.844H13.104L20.216 50.5H15.148L13.972 47.028ZM12.74 43.332L10.304 36.136L7.896 43.332H12.74ZM28.5685 30.844V50.5H23.7805V30.844H28.5685ZM53.8199 37.06C53.4653 36.4067 52.9519 35.912 52.2799 35.576C51.6266 35.2213 50.8519 35.044 49.9559 35.044C48.4066 35.044 47.1653 35.5573 46.2319 36.584C45.2986 37.592 44.8319 38.9453 44.8319 40.644C44.8319 42.4547 45.3173 43.8733 46.2879 44.9C47.2773 45.908 48.6306 46.412 50.3479 46.412C51.5239 46.412 52.5133 46.1133 53.3159 45.516C54.1373 44.9187 54.7346 44.06 55.1079 42.94H49.0319V39.412H59.4479V43.864C59.0933 45.0587 58.4866 46.1693 57.6279 47.196C56.7879 48.2227 55.7146 49.0533 54.4079 49.688C53.1013 50.3227 51.6266 50.64 49.9839 50.64C48.0426 50.64 46.3066 50.22 44.7759 49.38C43.2639 48.5213 42.0786 47.336 41.2199 45.824C40.3799 44.312 39.9599 42.5853 39.9599 40.644C39.9599 38.7027 40.3799 36.976 41.2199 35.464C42.0786 33.9333 43.2639 32.748 44.7759 31.908C46.2879 31.0493 48.0146 30.62 49.9559 30.62C52.3079 30.62 54.2866 31.1893 55.8919 32.328C57.5159 33.4667 58.5893 35.044 59.1119 37.06H53.8199ZM62.5481 42.66C62.5481 41.0547 62.8467 39.6453 63.4441 38.432C64.0601 37.2187 64.8907 36.2853 65.9361 35.632C66.9814 34.9787 68.1481 34.652 69.4361 34.652C70.5374 34.652 71.4987 34.876 72.3201 35.324C73.1601 35.772 73.8041 36.36 74.2521 37.088V34.876H79.0401V50.5H74.2521V48.288C73.7854 49.016 73.1321 49.604 72.2921 50.052C71.4707 50.5 70.5094 50.724 69.4081 50.724C68.1387 50.724 66.9814 50.3973 65.9361 49.744C64.8907 49.072 64.0601 48.1293 63.4441 46.916C62.8467 45.684 62.5481 44.2653 62.5481 42.66ZM74.2521 42.688C74.2521 41.4933 73.9161 40.5507 73.2441 39.86C72.5907 39.1693 71.7881 38.824 70.8361 38.824C69.8841 38.824 69.0721 39.1693 68.4001 39.86C67.7467 40.532 67.4201 41.4653 67.4201 42.66C67.4201 43.8547 67.7467 44.8067 68.4001 45.516C69.0721 46.2067 69.8841 46.552 70.8361 46.552C71.7881 46.552 72.5907 46.2067 73.2441 45.516C73.9161 44.8253 74.2521 43.8827 74.2521 42.688ZM82.952 42.66C82.952 41.0547 83.2506 39.6453 83.848 38.432C84.464 37.2187 85.2946 36.2853 86.34 35.632C87.3853 34.9787 88.552 34.652 89.84 34.652C90.8666 34.652 91.8 34.8667 92.64 35.296C93.4986 35.7253 94.1706 36.304 94.656 37.032V29.78H99.444V50.5H94.656V48.26C94.208 49.0067 93.564 49.604 92.724 50.052C91.9026 50.5 90.9413 50.724 89.84 50.724C88.552 50.724 87.3853 50.3973 86.34 49.744C85.2946 49.072 84.464 48.1293 83.848 46.916C83.2506 45.684 82.952 44.2653 82.952 42.66ZM94.656 42.688C94.656 41.4933 94.32 40.5507 93.648 39.86C92.9946 39.1693 92.192 38.824 91.24 38.824C90.288 38.824 89.476 39.1693 88.804 39.86C88.1506 40.532 87.824 41.4653 87.824 42.66C87.824 43.8547 88.1506 44.8067 88.804 45.516C89.476 46.2067 90.288 46.552 91.24 46.552C92.192 46.552 92.9946 46.2067 93.648 45.516C94.32 44.8253 94.656 43.8827 94.656 42.688ZM110.244 34.652C111.345 34.652 112.307 34.876 113.128 35.324C113.968 35.772 114.612 36.36 115.06 37.088V34.876H119.848V50.472C119.848 51.9093 119.559 53.2067 118.98 54.364C118.42 55.54 117.552 56.4733 116.376 57.164C115.219 57.8547 113.772 58.2 112.036 58.2C109.721 58.2 107.845 57.6493 106.408 56.548C104.971 55.4653 104.149 53.9907 103.944 52.124H108.676C108.825 52.7213 109.18 53.188 109.74 53.524C110.3 53.8787 110.991 54.056 111.812 54.056C112.801 54.056 113.585 53.7667 114.164 53.188C114.761 52.628 115.06 51.7227 115.06 50.472V48.26C114.593 48.988 113.949 49.5853 113.128 50.052C112.307 50.5 111.345 50.724 110.244 50.724C108.956 50.724 107.789 50.3973 106.744 49.744C105.699 49.072 104.868 48.1293 104.252 46.916C103.655 45.684 103.356 44.2653 103.356 42.66C103.356 41.0547 103.655 39.6453 104.252 38.432C104.868 37.2187 105.699 36.2853 106.744 35.632C107.789 34.9787 108.956 34.652 110.244 34.652ZM115.06 42.688C115.06 41.4933 114.724 40.5507 114.052 39.86C113.399 39.1693 112.596 38.824 111.644 38.824C110.692 38.824 109.88 39.1693 109.208 39.86C108.555 40.532 108.228 41.4653 108.228 42.66C108.228 43.8547 108.555 44.8067 109.208 45.516C109.88 46.2067 110.692 46.552 111.644 46.552C112.596 46.552 113.399 46.2067 114.052 45.516C114.724 44.8253 115.06 43.8827 115.06 42.688ZM139.44 42.436C139.44 42.884 139.412 43.3507 139.356 43.836H128.52C128.594 44.8067 128.902 45.5533 129.444 46.076C130.004 46.58 130.685 46.832 131.488 46.832C132.682 46.832 133.513 46.328 133.98 45.32H139.076C138.814 46.3467 138.338 47.2707 137.648 48.092C136.976 48.9133 136.126 49.5573 135.1 50.024C134.073 50.4907 132.925 50.724 131.656 50.724C130.125 50.724 128.762 50.3973 127.568 49.744C126.373 49.0907 125.44 48.1573 124.768 46.944C124.096 45.7307 123.76 44.312 123.76 42.688C123.76 41.064 124.086 39.6453 124.74 38.432C125.412 37.2187 126.345 36.2853 127.54 35.632C128.734 34.9787 130.106 34.652 131.656 34.652C133.168 34.652 134.512 34.9693 135.688 35.604C136.864 36.2387 137.778 37.144 138.432 38.32C139.104 39.496 139.44 40.868 139.44 42.436ZM134.54 41.176C134.54 40.3547 134.26 39.7013 133.7 39.216C133.14 38.7307 132.44 38.488 131.6 38.488C130.797 38.488 130.116 38.7213 129.556 39.188C129.014 39.6547 128.678 40.3173 128.548 41.176H134.54ZM152.074 46.44V50.5H149.638C147.902 50.5 146.548 50.08 145.578 49.24C144.607 48.3813 144.122 46.9907 144.122 45.068V38.852H142.218V34.876H144.122V31.068H148.91V34.876H152.046V38.852H148.91V45.124C148.91 45.5907 149.022 45.9267 149.246 46.132C149.47 46.3373 149.843 46.44 150.366 46.44H152.074ZM162.497 50.724C161.134 50.724 159.921 50.4907 158.857 50.024C157.793 49.5573 156.953 48.9227 156.337 48.12C155.721 47.2987 155.375 46.384 155.301 45.376H160.033C160.089 45.9173 160.341 46.356 160.789 46.692C161.237 47.028 161.787 47.196 162.441 47.196C163.038 47.196 163.495 47.084 163.813 46.86C164.149 46.6173 164.317 46.3093 164.317 45.936C164.317 45.488 164.083 45.1613 163.617 44.956C163.15 44.732 162.394 44.4893 161.349 44.228C160.229 43.9667 159.295 43.696 158.549 43.416C157.802 43.1173 157.158 42.66 156.617 42.044C156.075 41.4093 155.805 40.56 155.805 39.496C155.805 38.6 156.047 37.788 156.533 37.06C157.037 36.3133 157.765 35.7253 158.717 35.296C159.687 34.8667 160.835 34.652 162.161 34.652C164.121 34.652 165.661 35.1373 166.781 36.108C167.919 37.0787 168.573 38.3667 168.741 39.972H164.317C164.242 39.4307 163.999 39.0013 163.589 38.684C163.197 38.3667 162.674 38.208 162.021 38.208C161.461 38.208 161.031 38.32 160.733 38.544C160.434 38.7493 160.285 39.0387 160.285 39.412C160.285 39.86 160.518 40.196 160.985 40.42C161.47 40.644 162.217 40.868 163.225 41.092C164.382 41.3907 165.325 41.6893 166.053 41.988C166.781 42.268 167.415 42.7347 167.957 43.388C168.517 44.0227 168.806 44.8813 168.825 45.964C168.825 46.8787 168.563 47.7 168.041 48.428C167.537 49.1373 166.799 49.6973 165.829 50.108C164.877 50.5187 163.766 50.724 162.497 50.724Z" fill="black"/>
							<path d="M9.74 15.3C10.5533 15.4733 11.2067 15.88 11.7 16.52C12.1933 17.1467 12.44 17.8667 12.44 18.68C12.44 19.8533 12.0267 20.7867 11.2 21.48C10.3867 22.16 9.24667 22.5 7.78 22.5H1.24V8.46H7.56C8.98667 8.46 10.1 8.78667 10.9 9.44C11.7133 10.0933 12.12 10.98 12.12 12.1C12.12 12.9267 11.9 13.6133 11.46 14.16C11.0333 14.7067 10.46 15.0867 9.74 15.3ZM4.66 14.14H6.9C7.46 14.14 7.88667 14.02 8.18 13.78C8.48667 13.5267 8.64 13.16 8.64 12.68C8.64 12.2 8.48667 11.8333 8.18 11.58C7.88667 11.3267 7.46 11.2 6.9 11.2H4.66V14.14ZM7.18 19.74C7.75333 19.74 8.19333 19.6133 8.5 19.36C8.82 19.0933 8.98 18.7133 8.98 18.22C8.98 17.7267 8.81333 17.34 8.48 17.06C8.16 16.78 7.71333 16.64 7.14 16.64H4.66V19.74H7.18ZM25.9436 16.74C25.9436 17.06 25.9236 17.3933 25.8836 17.74H18.1436C18.1969 18.4333 18.4169 18.9667 18.8036 19.34C19.2036 19.7 19.6903 19.88 20.2636 19.88C21.1169 19.88 21.7103 19.52 22.0436 18.8H25.6836C25.4969 19.5333 25.1569 20.1933 24.6636 20.78C24.1836 21.3667 23.5769 21.8267 22.8436 22.16C22.1103 22.4933 21.2903 22.66 20.3836 22.66C19.2903 22.66 18.3169 22.4267 17.4636 21.96C16.6103 21.4933 15.9436 20.8267 15.4636 19.96C14.9836 19.0933 14.7436 18.08 14.7436 16.92C14.7436 15.76 14.9769 14.7467 15.4436 13.88C15.9236 13.0133 16.5903 12.3467 17.4436 11.88C18.2969 11.4133 19.2769 11.18 20.3836 11.18C21.4636 11.18 22.4236 11.4067 23.2636 11.86C24.1036 12.3133 24.7569 12.96 25.2236 13.8C25.7036 14.64 25.9436 15.62 25.9436 16.74ZM22.4436 15.84C22.4436 15.2533 22.2436 14.7867 21.8436 14.44C21.4436 14.0933 20.9436 13.92 20.3436 13.92C19.7703 13.92 19.2836 14.0867 18.8836 14.42C18.4969 14.7533 18.2569 15.2267 18.1636 15.84H22.4436ZM33.2878 22.66C32.3145 22.66 31.4478 22.4933 30.6878 22.16C29.9278 21.8267 29.3278 21.3733 28.8878 20.8C28.4478 20.2133 28.2011 19.56 28.1478 18.84H31.5278C31.5678 19.2267 31.7478 19.54 32.0678 19.78C32.3878 20.02 32.7811 20.14 33.2478 20.14C33.6745 20.14 34.0011 20.06 34.2278 19.9C34.4678 19.7267 34.5878 19.5067 34.5878 19.24C34.5878 18.92 34.4211 18.6867 34.0878 18.54C33.7545 18.38 33.2145 18.2067 32.4678 18.02C31.6678 17.8333 31.0011 17.64 30.4678 17.44C29.9345 17.2267 29.4745 16.9 29.0878 16.46C28.7011 16.0067 28.5078 15.4 28.5078 14.64C28.5078 14 28.6811 13.42 29.0278 12.9C29.3878 12.3667 29.9078 11.9467 30.5878 11.64C31.2811 11.3333 32.1011 11.18 33.0478 11.18C34.4478 11.18 35.5478 11.5267 36.3478 12.22C37.1611 12.9133 37.6278 13.8333 37.7478 14.98H34.5878C34.5345 14.5933 34.3611 14.2867 34.0678 14.06C33.7878 13.8333 33.4145 13.72 32.9478 13.72C32.5478 13.72 32.2411 13.8 32.0278 13.96C31.8145 14.1067 31.7078 14.3133 31.7078 14.58C31.7078 14.9 31.8745 15.14 32.2078 15.3C32.5545 15.46 33.0878 15.62 33.8078 15.78C34.6345 15.9933 35.3078 16.2067 35.8278 16.42C36.3478 16.62 36.8011 16.9533 37.1878 17.42C37.5878 17.8733 37.7945 18.4867 37.8078 19.26C37.8078 19.9133 37.6211 20.5 37.2478 21.02C36.8878 21.5267 36.3611 21.9267 35.6678 22.22C34.9878 22.5133 34.1945 22.66 33.2878 22.66ZM47.1202 19.6V22.5H45.3802C44.1402 22.5 43.1735 22.2 42.4802 21.6C41.7868 20.9867 41.4402 19.9933 41.4402 18.62V14.18H40.0802V11.34H41.4402V8.62H44.8602V11.34H47.1002V14.18H44.8602V18.66C44.8602 18.9933 44.9402 19.2333 45.1002 19.38C45.2602 19.5267 45.5268 19.6 45.9002 19.6H47.1202Z" fill="#1D4ED8"/>
						</svg>
					</a>
				</div>
				
				<nav class="main-navigation">
					<div>Home & Garden</div>
					<div>Kitchen</div>
					<div>Sport</div>
					<div>Tech</div>
					<div>Kids</div>
				</nav>
				
			</div><!-- .nav-layout --> 
		</div><!-- .container --> 
	</header>
