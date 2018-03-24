#Shell Basic Operators


<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;width:23%">Operator</th>
<th style="text-align:center;width:50%">Description</th>
<th style="text-align:center;width:40%">Example</th>
</tr>
<tr>
<td class="ts">+ (Addition)</td>
<td>Adds values on either side of the operator</td>
<td>`expr $a + $b` will give 30</td>
</tr>
<tr>
<td class="ts">- (Subtraction)</td>
<td>Subtracts right hand operand from left hand operand</td>
<td>`expr $a - $b` will give -10</td>
</tr>
<tr>
<td class="ts">* (Multiplication)</td>
<td>Multiplies values on either side of the operator</td>
<td>`expr $a \* $b` will give 200</td>
</tr>
<tr>
<td class="ts">/ (Division)</td>
<td>Divides left hand operand by right hand operand</td><td>`expr $b / $a` will give 2</td>
</tr>
<tr>
<td class="ts">% (Modulus)</td>
<td>Divides left hand operand by right hand operand and returns remainder</td>
<td>`expr $b % $a` will give 0</td>
</tr>
<tr>
<td class="ts">= (Assignment)</td>
<td style="vertical-align:middle;">Assigns right operand in left operand</td>
<td>a = $b would assign value of b into a</td>
</tr>
<tr>
<td class="ts">== (Equality)</td>
<td>Compares two numbers, if both are same then returns true.</td>
<td>[ $a == $b ] would return false.</td>
</tr>
<tr>
<td class="ts">!= (Not Equality)</td>
<td>Compares two numbers, if both are different then returns true.</td>
<td>[ $a != $b ] would return true.</td>
</tr>
</tbody></table>