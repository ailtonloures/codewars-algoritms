def accum(s):
    letters = list(str(s).lower())
    lettersSeparated = ""
    
    i = 1
    while i <= len(letters):
        lettersSeparated += (letters[i - 1] * i).title()

        if len(letters) != i:
            lettersSeparated += "-"

        i += 1    

    return lettersSeparated

accum("cwAt")