{{-- 19. Including subview Blade View --}}

<h4>1. layout.list</h4>
@include('layout.list')

<h4>2. includeif doesn't create any error</h4>
@includeif('layout.list1') 

<h4>3. includefirst show the 1st value from the array</h4>
@includefirst(['layout.list','layout.footer'])

<h4>4. includeWhen Will show when the boolean value is true</h4>
@includeWhen(true, 'layout.list')

<h4>5. includeWhen Will not show when the boolean value is false</h4>
@includeWhen(false, 'layout.list')

<h4>6. includeUnless Will not show when the boolean value is true</h4>
@includeUnless(true, 'layout.list')

<h4>7. includeUnless Will show when the boolean value is false</h4>
@includeUnless(false, 'layout.list')

<h4>8. layout.footer</h4>
@include('layout.footer', ['footerText'=>'All rights reserved.'])

