@extends('admincp.admincp')
@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">
        <a href="#">Admin</a>
    </li>
    <li class="breadcrumb-item active">Dashboard</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
            <a class="btn" href="#">
                <i class="icon-speech"></i>
            </a>
            <a class="btn" href="./">
                <i class="icon-graph"></i>  Dashboard</a>
            <a class="btn" href="#">
                <i class="icon-settings"></i>  Settings</a>
        </div>
    </li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-header">Card title</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                    <div class="card-footer">Card footer</div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-check"></i>Card with icon</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-header">Card with switch
                        <label class="switch switch-sm switch-text switch-info float-right mb-0">
                            <input class="switch-input" type="checkbox">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-header">Card with label
                        <span class="badge badge-success float-right">Success</span>
                    </div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-header">Card with label
                        <span class="badge badge-pill badge-danger float-right">42</span>
                    </div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row-->
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="card border-primary">
                    <div class="card-header">Card outline</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card border-secondary">
                    <div class="card-header">Card outline</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card border-success">
                    <div class="card-header">Card outline</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card border-info">
                    <div class="card-header">Card outline</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card border-warning">
                    <div class="card-header">Card outline</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card border-danger">
                    <div class="card-header">Card outline</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row-->
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="card card-accent-primary">
                    <div class="card-header">Card with accent</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card card-accent-secondary">
                    <div class="card-header">Card with accent</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card card-accent-success">
                    <div class="card-header">Card with accent</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card card-accent-info">
                    <div class="card-header">Card with accent</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card card-accent-warning">
                    <div class="card-header">Card with accent</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card card-accent-danger">
                    <div class="card-header">Card with accent</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row-->
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="card text-white bg-primary text-center">
                    <div class="card-body">
                        <blockquote class="card-bodyquote">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer>Someone famous in
                                <cite title="Source Title">Source Title</cite>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card text-white bg-success text-center">
                    <div class="card-body">
                        <blockquote class="card-bodyquote">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer>Someone famous in
                                <cite title="Source Title">Source Title</cite>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card text-white bg-info text-center">
                    <div class="card-body">
                        <blockquote class="card-bodyquote">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer>Someone famous in
                                <cite title="Source Title">Source Title</cite>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card text-white bg-warning text-center">
                    <div class="card-body">
                        <blockquote class="card-bodyquote">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer>Someone famous in
                                <cite title="Source Title">Source Title</cite>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card text-white bg-danger text-center">
                    <div class="card-body">
                        <blockquote class="card-bodyquote">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer>Someone famous in
                                <cite title="Source Title">Source Title</cite>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card text-white bg-primary text-center">
                    <div class="card-body">
                        <blockquote class="card-bodyquote">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer>Someone famous in
                                <cite title="Source Title">Source Title</cite>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row-->
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="card text-white bg-primary">
                    <div class="card-header">Card title</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card text-white bg-success">
                    <div class="card-header">Card title</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card text-white bg-info">
                    <div class="card-header">Card title</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card text-white bg-warning">
                    <div class="card-header">Card title</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card text-white bg-danger">
                    <div class="card-header">Card title</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-header">Card actions
                        <div class="card-header-actions">
                            <a class="card-header-action btn-setting" href="#">
                                <i class="icon-settings"></i>
                            </a>
                            <a class="card-header-action btn-minimize" href="#" data-toggle="collapse" data-target="#collapseExample"
                                aria-expanded="true">
                                <i class="icon-arrow-up"></i>
                            </a>
                            <a class="card-header-action btn-close" href="#">
                                <i class="icon-close"></i>
                            </a>
                        </div>
                    </div>
                    <div class="collapse show" id="collapseExample">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex
                            ea commodo consequat.
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Modal title</h4>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>One fine body…</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="button">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content-->
            </div>
            <!-- /.modal-dialog-->
        </div>
    </div>
</div>
@endsection
