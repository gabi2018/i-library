<?php  
	class Books extends Controller{
		private $booksModel;
		private $authorModel;
		private $authorTypeModel;
		private $editorialModel;
		private $languajeModel;
		private $categoryModel;

		public function __construct(){
			$this->booksModel      = $this->model('Book');
			$this->authorModel     = $this->model("Author");
			$this->authorTypeModel = $this->model("AuthorType");
			$this->editorialModel  = $this->model('Editorial');	 	
			$this->languajeModel   = $this->model('Languaje');
			$this->topicModel      = $this->model('Topic');	

		}
	
		public function index(){
			
		$param="";
			$this->view('books/index', $param);
		}  

		public function create(){  
			$param = [
				 "languajes"  => $this->languajeModel->getLanguajes(), 
				 "authors"	  => $this->authorModel->getAuthors(),
				 "authortypes" => $this->authorTypeModel->getAuthorTypes(),
				 "editorials" => $this->editorialModel->getEditorials(),
				 "topics"	  => $this->topicModel->getTopics()
 			];
			$this->view('books/create', $param);
		

		}

		public function store(){
			
			if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['book-register'])){
				if(isset($_POST['book-title']) && isset($_POST['book-isbn'])&& 
				   isset($_POST['book-languaje']) && isset($_POST['category-topic']) && 
				   isset($_POST['book-single']) && isset($_POST['book-editorial'])/*&& 
				   isset($_POST['book-topo'])&&isset($_POST['book-cata'])*/){
						   
					
						$book_avalability=true;
					
				  
					$param = [
						'book-title'=>trim($_POST['book-title']),
						'book-isbn'=>trim($_POST['book-isbn']),
						'book-img'=>$_FILES['book-img'],
						'book-pages'=>trim($_POST['book-pages']),
						'book-category'=>trim($_POST['category-topic']),
						'book-single'=>trim($_POST['book-single']),		
						'book-desc'=>trim($_POST['book-desc']),
						'book-editorial'=>trim($_POST['book-editorial']),
						'book-vol'=>trim($_POST['book-vol']),
						'book-edition'=>trim($_POST['book-edition']),
						'book-year'=>trim($_POST['book-year']),
						'book-topo'=>trim($_POST['book-topo']),
						'book-languaje'=>trim($_POST['book-languaje']),
						'book-cantiEje'=>trim($_POST['book-cant']),//me da el for para insertar
						'book-authors'=>$_POST['author-list'],
						'book-avalability'=>$book_avalability,
					];
					
															
					if($this->booksModel->addBook($param)){
						redirect('books/create');		
						echo '<p>guardado con exito<p>';		
					}	
				
					else{
						echo"FATAL ERROR";
					}
				}
				echo"error no entro "; 
			}		 
		}

		public function search(){
			if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['book-register'])){	
				if(isset($_POST['book-title'])){
				
					$title=trim($_POST['book-title']);
					
					
					$books=$this->booksModel->getBooksTitle($title);
						$param = [ 'books' => $books ,];
				

						$this->view('books/index', $param);
					}
			
				else{
					echo"FATAL ERROR";
				}
			}
		}

		public function edit(){
			$this->view('books/edit');
		}

		public function update(){}

		public function delete(){}
 	}
?>