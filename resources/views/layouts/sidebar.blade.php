<nav id="sidebar">
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <ul class="app-menu">
            <li><a class="app-menu_item active" href=""><i class="app-menu_icon fa fa-dashboard"></i><span
                        class="app-menu__label">Página Principal</span></a></li>
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                        class="app-menu_icon fa fa-laptop"></i><span class="app-menu_label">Cadastros</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="{{ url('listar_usuario') }}"><i
                                class="icon fa fa-circle-o"></i>Usuarios</a></li>
                    <li><a class="treeview-item" href="{{ url('/editora/listar') }}"><i
                                class="icon fa fa-circle-o"></i>Editora</a></li>
                    <li><a class="treeview-item" href="{{ url('/livro/listar') }}"><i
                                class="icon fa fa-circle-o"></i>Livro</a></li>
                    <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a>
                    </li>
                </ul>
            </li>

            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                        class="app-menu_icon fa fa-edit"></i><span class="app-menu_label">Segurança</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="{{ url('/role/listar') }}"><i
                                class="icon fa fa-circle-o"></i>Papel de Usuário</a></li>
                    <li><a class="treeview-item" href="{{ url('/permissao/listar') }}"><i
                                class="icon fa fa-circle-o"></i>Permissões de Usuário</a></li>
                    <li><a class="treeview-item" href="{{ url('/acao/listar') }}"><i
                                class="icon fa fa-circle-o"></i>Ações</a></li>
                    <li><a class="treeview-item" href="{{ url('/usuario/listar') }} "><i
                                class="icon fa fa-circle-o"></i>Usuário</a></li>
                    <li><a class="treeview-item" href="/direitos/pesquisar"><i class="icon fa fa-circle-o"></i> Direitos
                            de Acesso</a></li>
                </ul>
            </li>

            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                        class="app-menu_icon fa fa-key"></i><span class="app-menu_label">Alterar Senha</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="/trocar/senha"><i class="icon fa fa-circle-o"></i>Trocar
                            Senha</a></li>
                </ul>
            </li>

            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                        class="app-menu_icon fa fa-file-text"></i><span class="app-menu_label">Pages</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                </ul>
            </li>
        </ul>
    </aside>
</nav>