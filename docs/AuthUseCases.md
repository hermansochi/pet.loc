## Common

1. Use CQS (Common Query Segregation).
2. Command send via POST HTTP request.
3. Query send via GET HTTP request.

## Use case:

1. Sign up by email:
	a) Request registration.
	b) Confirm by token

2. Reset password
	a) Request via email
	b) Reset password. Reset only if token is not expired!

3. Change email (?)
  a) Request
	b) Confirm via confirmation email to old address.

4. Change role (only for admin)
