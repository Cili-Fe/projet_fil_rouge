@extends('layouts.dash_head')
@section('contenu')
<div class="card">
  <div class="card-header">
    <h3 class="card-title text-center">Liste des Conseils publiers</h3>
  </div>
  <!-- /.card-header -->
  <div class="table table-responsive card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr class="text-center">
        <th >#</th>
        <th >Date de pub</th>
        <th >Titre</th>
        <th >Catégorie</th>
        <th >Photo</th>
        <th >Action</th>
      </tr>
      </thead>
      <tbody>
        <tr class="">
          @foreach ($conseils as $key=>$conseil)
          <td  > {{++$key}}</td>
          <td  > {{$conseil->created_at}}</td>
          <td  > {{$conseil->titre}}</td>
          <td  > {{$conseil->categorie_conseil->nom_categorie}}</td>
          <td  ><img src="{{asset('storage').'/'.$conseil->file}} " style="width:40px;height:40px;" class=" border rounded-circle "></td>
          <td  >
            <a href=" {{route('conseil.show', $conseil->id)}}"><button class="btn btn-success"> <i class="fas fa-eye"></i></button></a>
            <a href=" {{route('conseil.edit', $conseil->id)}}"><button class="btn btn-info"><i class="fas fa-edit"></i></button></a>
              <form action=" {{route('delete.conseil', $conseil->id)}}" method="post" class="d-inline">
                @csrf
                    @method('DELETE')
                <button type="submit" onclick='return confirm("Voulez-vous vraiment supprimer ce conseil?")'; class="btn btn-danger"><i class="fas fa-trash"></i></button>
              </form>
          </td>
        </tr>  
        @endforeach
        
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
@endsection

@section('script')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [ "csv", "excel", "pdf", "print",],
      "language": {
    "sProcessing": "Traitement en cours ...",
    "sLengthMenu": "Afficher _MENU_ lignes",
    "sZeroRecords": "Aucun résultat trouvé",
    "sEmptyTable": "Aucune donnée disponible",
    "sInfo": "Lignes _START_ à _END_ sur _TOTAL_",
    "sInfoEmpty": "Aucune ligne affichée",
    "sInfoFiltered": "(Filtrer un maximum de_MAX_)",
    "sInfoPostFix": "",
    "sSearch": "Chercher:",
    "sUrl": "",
    "sInfoThousands": ",",
    "sLoadingRecords": "Chargement...",
    "oPaginate": {
      "sFirst": "Premier", "sLast": "Dernier", "sNext": "Suivant", "sPrevious": "Précédent"
    },
    "oAria": {
      "sSortAscending": ": Trier par ordre croissant", "sSortDescending": ": Trier par ordre décroissant"
    }
  }
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
     
  });
</script>
@endsection