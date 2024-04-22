<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customize Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <br>
    <br>

    <div class="container m-auto mt-5">
        
        <a href="{{ url('/owner-home') }}" class="btn btn-secondary mb-3">Back to Homepage</a>
        <span></span>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
            Add Item
        </button>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                <th scope="col">Restaurant</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($menus as $food)
                  <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>
                        <img src="{{ asset('assets/img/' . $food->food_pic) }}"class="img-fluid" style="width: 250px;">
                    </td>
                    <td>{{ $food->food_name }}</td>
                    <td>{{ $food->food_price }}</td>
                    <td>{{ $food->description }}</td>
                    <td>{{ $food->category }}</td>
                    <td>{{ $food->area->restaurant }}</td>
                    <td>

                        <button type="button" class="btn btn-primary d-inline-block" data-bs-toggle="modal" data-bs-target="#ubahModal_{{ $food->menu_id }}"
                          >
                            Update
                        </button>

                        <form action="{{ route("menus.destroy", $food->menu_id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method("delete")
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>     
                     
                        <script>
                            document.getElementById('deleteForm').addEventListener('submit', function () {
                                console.log('Form submitted!');
                            });
                        </script>

                         <!-- Modal -->
                         <form action="{{ route("menus.update", $food->menu_id) }}" method="post" id="ubahForm" enctype="multipart/form-data">
                               <div class="modal fade" id="ubahModal_{{ $food->menu_id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ubahModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="ubahModalLabel">Update Item</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                                <div class="modal-body">
                                                    
                                                        @csrf
                                                        @method('put')
                                                        <div class="mb-3">
                                                            <label>Image Baru</label>
                                                            <input type="file" class="form-control" name="food_pic" >
                                                        </div>
                                                        <div class="mb-3">
                                                            <label>Title</label>
                                                            <input type="text" class="form-control" name="food_name" value="{{ $food->food_name }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label>Price</label>
                                                            <input type="number" class="form-control" name="food_price" value="{{ $food->food_price }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label>Description</label>
                                                            <textarea name="description" class="form-control">{{ $food->description }}</textarea>
                                                        </div>
                                                        <label>Category</label>
                                                        <select name="category" class="form-control mb-3">
                                                            <option value="Snack" {{ $food->category == "Snack" ? "selected" : "" }}>Snack</option>
                                                            <option value="Rice" {{ $food->category == "Rice" ? "selected" : "" }}>Rice</option>
                                                            <option value="Soup" {{ $food->category == "Soup" ? "selected" : "" }}>Soup</option>
                                                        </select>

                                                        <label>Restaurant</label>
                                                        <select name="restaurant_id" class="form-control">
                                                            @foreach ($area as $subitem)
                                                            <option value="{{ $subitem->id }}" {{ $subitem->id == $food->restaurant_id ? "selected" : "" }}>{{ $subitem->restaurant }}</option>
                                                            @endforeach

                                                        </select>
                                                </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                            </form>
                        
                        
                    </td>
                  </tr>
              @endforeach
{{-- 
              @if ($errors->any())
                  @php
                      dd($errors->all());
                  @endphp
              @endif --}}

              <!-- Modal -->
                <div class="modal fade" id="tambahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="tambahModalLabel">Add item</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/menus" method="post" id="tambahForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label>Image</label>
                                        <input type="file" class="form-control" name="food_pic">
                                    </div>
                                    <div class="mb-3">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="food_name">
                                    </div>
                                    <div class="mb-3">
                                        <label>Price</label>
                                        <input type="number" class="form-control" name="food_price">
                                    </div>
                                    <div class="mb-3">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control"></textarea>
                                    </div>
                                    <label>Category</label>
                                    <select name="category" class="form-control">
                                        <option>Snack</option>
                                        <option>Rice</option>
                                        <option>Soup</option>
                                    </select>

                                       <label>Restaurant</label>
                                <select name="restaurant_id" class="form-control">
                                    @foreach ($area as $subitem)
                                        <option value="{{ $subitem->id }}">{{ $subitem->restaurant }}</option>
                                    @endforeach

                                </select>
                                </form>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" form="tambahForm">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

              
            </div>

            <script>
                function setData(foodID) {
                    ubahForm.action = '/menus/' + foodID;
                    
                }
            </script>
{{-- <script>
    document.getElementById("tambahForm").addEventListener("submit", function (event) {
        event.preventDefault();
        // Your existing form submission logic here
    });
</script> --}}
            </tbody>
          </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
  </body>
</html>