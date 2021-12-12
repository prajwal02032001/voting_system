t=int(input())
for i in range(t):
    n=int(input())
    if(n==2):
        print(2,1)
    else:
        print(1,end=" ")
        for j in range(3,n+1):
            print(j,end=" ")
        print(2)