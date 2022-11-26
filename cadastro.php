<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$nome = $email = "";
$nome_err = $email_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_nome = trim($_POST["nome"]);
    if(empty($input_nome)){
        $nome_err = "Please enter a nome.";
    } elseif(!filter_var($input_nome, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $nome_err = "Please enter a valid nome.";
    } else{
        $nome = $input_nome;
    }
    
    // Validate address
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $address_err = "Please enter an email.";     
    } else{
        $email = $input_email;
    }
    
    // Validate salary
    $input_senha = trim($_POST["senha"]);
    if(empty($input_senha)){
        $senha_err = "Please enter the senha amount.";     
    } elseif(!ctype_digit($input_senha)){
        $senha_err = "Please enter a positive integer value.";
    } else{
        $senha = $input_senha;
    }
    
    // Check input errors before inserting in database
    if(empty($nome_err) && empty($email_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO pessoa (nome, email, senha) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_nome, $param_email, $param_senha);
            
            // Set parameters
            $param_nome = $nome;
            $param_email = $email;
            $param_senha = $senha;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Novo Usuário</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="nome" class="form-control <?php echo (!empty($nome_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $nome; ?>">
                            <span class="invalid-feedback"><?php echo $nome_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>"><?php echo $email; ?></input>
                            <span class="invalid-feedback"><?php echo $email_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" name="senha" class="form-control <?php echo (!empty($senha_err)) ? 'is-invalid' : ''; ?>" value="">
                            <span class="invalid-feedback"><?php echo $senha_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Cadastrar">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancelar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
      