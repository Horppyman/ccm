            <form action="{{route('storecategory')}}" method="post">
                @csrf
                    <input type="text" name="category_name">

                    <input type="text" name="category_desc">

                    <button type="submit">send</button>

                </form>
