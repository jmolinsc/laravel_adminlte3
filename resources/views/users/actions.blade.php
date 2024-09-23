<div>
    <!-- Edit -->
    <a class="btn text-white btn-sm" data-mdb-ripple-init style="background-color: #3b5998;"
        wire:click="$parent.editrow"
        wire:navigate.hover role="button">
        <i class="fa fa-solid fa-pencil"></i>
        Edit {{$item}}
    </a>
</div>
