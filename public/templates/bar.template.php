<div class="row">
    <div class="d-sm-none d-md-block col-md-2 d-none text-bg-dark sitebar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="productos">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Marcas
                </a>
                <ul class="dropdown-menu">
                    <?php foreach($marcas as $marca): ?>
                    <li><a class="dropdown-item" href="pBrand?brand=<?php echo $marca->id ?>"><?php echo $marca->name; ?></a></li>
                    <?php endforeach; ?>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Otras Marcas</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Categorías
                </a>
                <ul class="dropdown-menu">
                    <?php foreach($categories as $categ): ?>
                    <li><a class="dropdown-item" href="pCategoria?categoria=<?php echo $categ->id ?>"><?php echo $categ->name; ?></a></li>
                    <?php endforeach; ?><li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Otras categorías</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="eliminar?action=logout">Cerrar Sesión</a>
            </li>
            <li class="nav-item">
                <?php echo $_SESSION['name']?>
            </li>
        </ul>
    </div>