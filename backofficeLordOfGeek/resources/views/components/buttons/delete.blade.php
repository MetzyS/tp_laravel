<form action="{{$action}}" method="POST">
    @method('DELETE') @csrf
    <input type="submit" value="{{__('Supprimer')}}" class="text-white bg-red-600 font-bold px-2 py-2 rounded-md text-xs cursor-pointer">
</form>