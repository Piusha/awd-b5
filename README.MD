# Shell Basic Operators

## Erithmatic Operators
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
<td>$[ a == b ] would return false.</td>
</tr>
<tr>
<td class="ts">!= (Not Equality)</td>
<td>Compares two numbers, if both are different then returns true.</td>
<td>$[ a != b ] would return true.</td>
</tr>
</tbody></table>

Example 

    [ $a == $b ] this will return true
    `expr $a \* $b` this will return multiplication of variable a and b

## Relational Operators

These operators do not work for string values unless their value is numeric.

<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">Operator</th>
<th style="text-align:center;">Description</th>
<th style="text-align:center;width:25%">Example</th>
</tr>
<tr>
<td class="ts"><b>-eq</b></td>
<td>Checks if the value of two operands are equal or not; if yes, then the condition becomes true.</td>
<td>[ $a -eq $b ] is not true.</td>
</tr>
<tr>
<td class="ts"><b>-ne</b></td>
<td>Checks if the value of two operands are equal or not; if values are not equal, then the condition becomes true.</td>
<td style="vertical-align:middle;">[ $a -ne $b ] is true.</td>
</tr>
<tr>
<td class="ts"><b>-gt</b></td>
<td>Checks if the value of left operand is greater than the value of right operand; if yes, then the condition becomes true.</td>
<td style="vertical-align:middle;">[ $a -gt $b ] is not true.</td>
</tr>
<tr>
<td class="ts"><b>-lt</b></td>
<td>Checks if the value of left operand is less than the value of right operand; if yes, then the condition becomes true.</td>
<td style="vertical-align:middle;">[ $a -lt $b ] is true.</td>
</tr>
<tr>
<td class="ts"><b>-ge</b></td>
<td>Checks if the value of left operand is greater than or equal to the value of right operand; if yes, then the condition becomes true.</td>
<td style="vertical-align:middle;">[ $a -ge $b ] is not true.</td>
</tr>
<tr>
<td class="ts"><b>-le</b></td>
<td>Checks if the value of left operand is less than or equal to the value of right operand; if yes, then the condition becomes true.</td>
<td style="vertical-align:middle;">[ $a -le $b ] is true.</td>
</tr>
</tbody></table>

In Example 
     if [ $a <= $b ]



## Boolean Operators

<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">Operator</th>
<th style="text-align:center;">Description</th>
<th style="text-align:center;width:25%">Example</th>
</tr>
<tr>
<td class="ts"><b>!</b></td>
<td>This is logical negation. This inverts a true condition into false and vice versa.</td>
<td style="vertical-align:middle;">[ ! false  ] is true.</td>
</tr>
<tr>
<td class="ts"><b>-o</b></td>
<td>This is logical <b>OR</b>. If one of the operands is true, then the condition becomes true.</td>
<td>[  $a -lt 20  -o $b -gt 100 ] is true.</td>
</tr>
<tr>
<td class="ts"><b>-a</b></td>
<td>This is logical <b>AND</b>. If both the operands are true, then the condition becomes true otherwise false.</td>
<td style="vertical-align:middle;">[  $a -lt 20  -a $b -gt 100 ] is false. </td>
</tr>
</tbody></table>


## String Operators

<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">Operator</th>
<th style="text-align:center;">Description</th>
<th style="text-align:center;width:30%">Example</th>
</tr>
<tr>
<td class="ts"><b>=</b></td>
<td>Checks if the value of two operands are equal or not; if yes, then the condition becomes true.</td>
<td class="ts">[ $a = $b ] is not true.</td>
</tr>
<tr>
<td class="ts"><b>!=</b></td>
<td>Checks if the value of two operands are equal or not; if values are not equal then the condition becomes true.</td>
<td class="ts">[ $a != $b ] is true.</td>
</tr>
<tr>
<td class="ts"><b>-z</b></td>
<td>Checks if the given string operand size is zero; if it is zero length, then it returns true.</td>
<td class="ts">[ -z $a ] is not true.</td>
</tr>
<tr>
<td class="ts"><b>-n</b></td>
<td>Checks if the given string operand size is non-zero; if it is nonzero length, then it returns true.</td>
<td class="ts">[ -n $a ] is not false.</td>
</tr>
<tr>
<td class="ts"><b>str</b></td>
<td>Checks if <b>str</b> is not the empty string; if it is empty, then it returns false.</td>
<td class="ts">[ $a ] is not false.</td>
</tr>
</tbody></table>


## File Test Operators

<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">Operator</th>
<th style="text-align:center;">Description</th>
<th style="text-align:center;width:29%">Example</th>
</tr>
<tr>
<td class="ts"><b>-b file</b></td>
<td>Checks if file is a block special file; if yes, then the condition becomes true.</td>
<td class="ts">[ -b $file ] is  false.</td>
</tr>
<tr>
<td class="ts"><b>-c file</b></td>
<td>Checks if file is a character special file; if yes, then the condition becomes true.</td>
<td class="ts">[ -c $file ] is  false.</td>
</tr>
<tr>
<td class="ts"><b>-d file</b></td>
<td>Checks if file is a directory; if yes, then the condition becomes true.</td>
<td class="ts">[ -d $file ] is not true.</td>
</tr>
<tr>
<td class="ts"><b>-f file</b></td>
<td>Checks if file is an ordinary file as opposed to a directory or special file; if yes, then the condition becomes true.</td>
<td class="ts">[ -f $file ] is  true.</td>
</tr>
<tr>
<td class="ts"><b>-g file</b></td>
<td>Checks if file has its set group ID (SGID) bit set; if yes, then the condition becomes true.</td>
<td class="ts">[ -g $file ] is  false.</td>
</tr>
<tr>
<td class="ts"><b>-k file</b></td>
<td>Checks if file has its sticky bit set; if yes, then the condition becomes true.</td>
<td class="ts">[ -k $file ] is  false.</td>
</tr>
<tr>
<td class="ts"><b>-p file</b></td>
<td>Checks if file is a named pipe; if yes, then the condition becomes true.</td>
<td class="ts">[ -p $file ] is  false.</td>
</tr>
<tr>
<td class="ts"><b>-t file</b></td>
<td>Checks if file descriptor is open and associated with a terminal; if yes, then the condition becomes true.</td>
<td class="ts">[ -t $file ] is  false.</td>
</tr>
<tr>
<td class="ts"><b>-u file</b></td>
<td>Checks if file has its Set User ID (SUID) bit set; if yes, then the condition becomes true.</td>
<td class="ts">[ -u $file ] is  false.</td>
</tr>
<tr>
<td class="ts"><b>-r file</b></td>
<td>Checks if file is readable; if yes, then the condition becomes true.</td>
<td class="ts">[ -r $file ] is  true.</td>
</tr>
<tr>
<td class="ts"><b>-w file</b></td>
<td>Checks if file is writable; if yes, then the condition becomes true.</td>
<td class="ts">[ -w $file ] is  true.</td>
</tr>
<tr>
<td class="ts"><b>-x file</b></td>
<td>Checks if file is executable; if yes, then the condition becomes true.</td>
<td class="ts">[ -x $file ] is  true.</td>
</tr>
<tr>
<td class="ts"><b>-s file</b></td>
<td>Checks if file has size greater than 0; if yes, then condition becomes true.</td>
<td class="ts">[ -s $file ] is true.</td>
</tr>
<tr>
<td class="ts"><b>-e file</b></td>
<td>Checks if file exists; is true even if file is a directory but exists.</td>
<td class="ts">[ -e $file ] is true.</td>
</tr>
</tbody></table>


## Logical Operators

Unix Shell supports conditional statements which are used to perform different actions based on different conditions. We will now understand two decision-making statements here −

The if...else statement

The case...esac statement
