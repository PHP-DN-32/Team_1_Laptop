<div class="second-menu">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-animations" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo URL_BASE; ?>"><span class="glyphicon glyphicon-home"></span></a>
            </div>
            <div class="navbar-collapse collapse" id="navbar-collapse-animations" data-hover="dropdown" data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft" aria-expanded="false" style="height: 1px;">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Laptop <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdownhover-top" role="menu" style="bottom: 100%; top: auto;">

                            <?php
                            if (count($this->arrMenuLaptop) > 0) {
                                $a = end($this->arrMenuLaptop);
                                foreach ($this->arrMenuLaptop as $key => $value) {
                                    echo "<li><a href=''>";
                                    echo $value['tendanhmuc'];
                                    echo "</a></li>";
                                    if ($value != $a) {
                                        echo "<li class='divider'></li>";
                                    }
                                }
                            }
                            ?>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Laptop Gaming <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdownhover-top" role="menu" style="bottom: 100%; top: auto;">
                            <?php
                            if (count($this->arrMenuGaming) > 0) {
                                $a = end($this->arrMenuGaming);
                                foreach ($this->arrMenuGaming as $key => $value) {
                                    echo "<li><a href=''>";
                                    echo $value['tendanhmuc'];
                                    echo "</a></li>";
                                    if ($value != $a) {
                                        echo "<li class='divider'></li>";
                                    }
                                }
                            }
                            ?>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Apple Macbook <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdownhover-top" role="menu" style="bottom: 100%; top: auto;">
                            <?php
                            if (count($this->arrMenuMacbook) > 0) {
                                $a = end($this->arrMenuMacbook);
                                foreach ($this->arrMenuMacbook as $key => $value) {
                                    echo "<li><a href=''>";
                                    echo $value['tendanhmuc'];
                                    echo "</a></li>";
                                    if ($value != $a) {
                                        echo "<li class='divider'></li>";
                                    }
                                }
                            }
                            ?>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Phụ kiện <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdownhover-top" role="menu" style="bottom: 100%; top: auto;">
                            <?php
                            if (count($this->arrMenuPhukien) > 0) {
                                $a = end($this->arrMenuPhukien);
                                foreach ($this->arrMenuPhukien as $key => $value) {
                                    echo "<li><a href=''>";
                                    echo $value['tendanhmuc'];
                                    echo "</a></li>";
                                    if ($value != $a) {
                                        echo "<li class='divider'></li>";
                                    }
                                }
                            }
                            ?>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Linh kiện <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdownhover-top" role="menu" style="bottom: 100%; top: auto;">
                            <?php
                            if (count($this->arrMenuLinhkien) > 0) {
                                $a = end($this->arrMenuLinhkien);
                                foreach ($this->arrMenuLinhkien as $key => $value) {
                                    echo "<li><a href=''>";
                                    echo $value['tendanhmuc'];
                                    echo "</a></li>";
                                    if ($value != $a) {
                                        echo "<li class='divider'></li>";
                                    }
                                }
                            }
                            ?>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" title="">Sửa chữa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
