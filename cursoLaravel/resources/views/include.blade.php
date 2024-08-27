<h1>Includes hello World</h1>

{{-- @includeIf('components.component1', ['html' => '<h1>Component2</h1>'])  --}}

{{-- da para usar esse includeWhen para validar uma variavel que retorna true ou false exmeplo pode ser user admin --}}
{{-- @includeWhen(true,'components.component1', ['html' => '<h1>Component2</h1>']) --}}

{{-- O includeUnless e caso você queira fazer a validação contraria do includeWhen caso resolve alguma coisa seja false --}}
{{-- @includeUnless(true,'components.component', ['html' => '<h1>Component2</h1>']) --}}

{{-- includeFirst ele faz um validação de todos os componentes que tiverem no array caso não exista o primeiro a componente do array ele vai para o proximo  --}}
@includeFirst(
['components.component1',
'components.component'], 
['html' => '<h1>Component2</h1>'])

{{-- @component('components.component')

    <h1>olá meu nome e michel</h1>

    <h3>Seja bem vindo!</h3>
    
@endcomponent --}}