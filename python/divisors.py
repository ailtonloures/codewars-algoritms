def divisors(integer):
    i = 2
    arrDivisors = []

    while i < integer:
        if integer % i == 0:
            arrDivisors.append(i)
        i += 1
    
    if len(arrDivisors) == 0:
        return str(integer) + " is prime"

    return arrDivisors

divisors(13)