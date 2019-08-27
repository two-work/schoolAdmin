{{ Aire::open() 
->rules([
    'accepted' => 'accepted',
    'after_reference' => 'after:reference_date',
    'after_or_equal_reference' => 'after_or_equal:reference_date',
    'before_reference' => 'before:reference_date',
    'before_or_equal_reference' => 'before_or_equal:reference_date',
    'date' => 'date',
    'alpha' => 'alpha',
    'alpha_dash' => 'alpha_dash',
    'alpha_num' => 'alpha_num',
    'array' => 'array',
    'between' => 'numeric|between:2,4',
    'confirmed' => 'confirmed',
    'different' => 'different:different_from',
    'digits' => 'digits:5',
    'email' => 'email',
    'in' => 'in:foo,bar,baz',
    'not_in' => 'not_in:foo,bar,baz',
    'integer' => 'integer',
    'min_string' => 'min:5',
    'min_number' => 'numeric|min:5',
    'max_string' => 'max:5',
    'max_number' => 'numeric|max:5',
    'regex' => 'regex:/^[a-z]\d{4}$/i',
    'numeric' => 'numeric',
    'required' => 'required',
    'radio' => 'required_if|radio',
    'required_if' => 'required_if:required,yes',
    'required_unless' => 'required_unless:required_if,no',
    'required_with' => 'required_with:required_unless',
    'required_with_all' => 'required_with_all:required,required_if,required_unless,required_with',
    'required_without' => 'required_without:required_with_all',
    'required_without_all' => 'required_without_all:required,required_if,required_unless,required_with,required_with_all,required_without',
    'same' => 'same:same_target',
    'size_string' => 'size:5',
    'size_number' => 'numeric|size:5',
    'url' => 'url',
  ])
  ->messages([
    'accepte' => 'You must accept the terms',
    'radio' => 'Input',
  ])
  }}
    
{{ Aire::input()
    ->label('Demo Input')
    ->id('demo')
    ->helpText('This is demo help text.') }}

{{ Aire::select(['one' => 'Option 1', 'two' => 'Option 2'])
    ->label('Demo Select') }}
            
{{ Aire::timezoneSelect('timezone', 'Timezone') }}

{{ Aire::textarea()
    ->value('Demo text area') }}

{{ Aire::checkbox()
    ->label('Demo check box')
    ->name('required') }}

// Radio groups must have a name
{{ Aire::radioGroup(['one' => 'Option 1', 'two' => 'Option 2'], 'demo_radios')
    ->name('radio')
    ->label('Demo radio group') }}

{{ Aire::submit('Demo Submit Button') }}

{{ Aire::close() }}

