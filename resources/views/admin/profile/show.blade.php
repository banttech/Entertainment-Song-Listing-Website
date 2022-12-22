			<div class="app-title">
			    <div>
			        <h1>{{ $pageTitle}}</h1>
			    </div>
			</div>
			<table class="resp">

			    <thead>
			        <tr>
			            <th scope="col" width="50%">No</th>
			            <th scope="col" width="50%">Nake</th>

			        </tr>


			    </thead>
			    <tbody>
                   @foreach($make as $make)
			        <tr>
			            <td data-label="Contact Info">Haseeb Ahmed</td>
			            <td data-label="Bought Vehicles">{{ $make->name }}</td>
			        </tr>
			       @endforeach
			    </tbody>
			</table>
			<div class="text-center">
			    <nav class="" aria-label="Page navigation example">
			        <ul class="pagination">
			            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
			            <li class="page-item"><a class="page-link" href="#">1</a></li>
			            <li class="page-item"><a class="page-link" href="#">2</a></li>
			            <li class="page-item"><a class="page-link" href="#">3</a></li>
			            <li class="page-item"><a class="page-link" href="#">4</a></li>
			            <li class="page-item"><a class="page-link" href="#">5</a></li>
			            <li class="page-item"><a class="page-link" href="#">Next</a></li>
			        </ul>
			    </nav>
			</div>