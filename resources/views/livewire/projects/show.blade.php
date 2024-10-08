<div>
    componetent livewire projects.show
    
    <pre>
        title: {{$project->title}}
        description: {!!$project->description!!}   {{-- {!! !!} trata o conteudo como html --}} 
        ends_at: {{$project->ends_at}}
        created_by: {{$project->created_by}}
    </pre>

</div>
