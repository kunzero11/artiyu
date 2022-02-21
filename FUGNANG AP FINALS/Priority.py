import tkinter as tk            # Import GUI Library as tk
from tkinter import *           # Import all GUI Library
import globalVar                # Import Global Variables
import time

globalVar.mainW()               # Declare global variable main window
globalVar.gantW()               # Declare global variable gant window

##################################################################

def gui(proc,n,wt,tat,awt,atat,pt):        # process,number of process,waiting time, turn around time, avg waiting time, avg turn around time, priority
    main = globalVar.mWindow            # main is equal to global main window
    gant = globalVar.gWindow            # gant is equal to global gant window
    
    # main window
    main.title("Pre-Emptive")     # main title
    main.resizable(0,0)                             # non resizable main window

    # gant window
    gant.title("Gant Chart")                        # gant title
    gant.resizable(0,0)                             # non resizable gant window

    # table labels         
    tk.Label(main,
          text="Process\tArrival Time\tBurst Time\tWaiting Time\tTurn Around Time\tPriority",
          font=("Nyala",16)).grid(row=0)

    # table details
    for j in range(n):
        tk.Label(main,
              text=str(proc[j][0])+"\t\t"+str(proc[j][1])+"\t\t\t"+str(proc[j][2])+"\t\t\t"+str(wt[j])+"\t\t\t"+str(tat[j])+"\t\t\t"+str(proc[j][3])+"\t",
              font=("Nyala",11),
              height=int(10/n+1)).grid(row=j+1,sticky=W)

    # show average waiting time and average turn around time
    tk.Label(main,
             text="Average waiting time: %.2f\t\t Average Turn Around Time: %.2f"%(awt,atat),
             font=("Nyala",11),
             height=int(10/n+1)).grid(row=99,sticky=E+W)

    main.mainloop()

##################################################################

def idle(n,t):              # gant bar on idle / step
    tk.Label(globalVar.gWindow, text="  ",
             font=("Century Gothic",11), bg = 'lightgray').grid(row=n,column=t+1,sticky=W)

def shorts(short,t):        # gant bar on processes / step
    tk.Label(globalVar.gWindow, text="  ",
             font=("Century Gothic",11), bg = 'lightblue').grid(row=short,column=t+1,sticky=W)    

##################################################################

def findWT(proc, n, wt):            # processes, number of process, waiting time
    gant = globalVar.gWindow        # gant is equal to gant window
    rt = [0] * n                    # REMAINING TIME

    # copy burst time into remaining time
    for i in range(n):
        rt[i] = proc[i][2]

    # initialize variables
    complete = 0            # completion iterator on when to stop
    t = 0                   # time 
    rq = 0      # temporary rq
    first = 999999999   
    prio = 999999999                  # priority
    check = False           # to check ready queue if there is a process

    # LABEL process numbers for gant window
    for j in range(n):
        tk.Label(gant,
                 text="P"+str(proc[j][0]),
                 font=("Nyala",11)).grid(row=j,column=0,sticky=W)


    # LABEL idle for gant window
    tk.Label(gant,font=("Nyala",11),
             text="idle").grid(row=n,column=0)

    # process all until completed
    while(complete != n):

        # find process with priority 
        # til the current time

        for j in range(n):
            if(proc[j][1] <= t) and (rt[j] > 0 ) and (proc[j][3] <= prio ):
                if proc[j][3] == proc[rq][3]:
                      rq = rq
                else:
                     rq = j
                prio = proc[j][3]
                check = True
        # if there is no process on ready queue
        if (check == False):
            idle(n,t)       # step 1 on idle
            t += 1          # increment time
            continue        # skip loop once

        # reduce remaining time by one
        rt[rq] -= 1

        # if a process gets completely done
        if rt[rq] == 0:
            prio = 999999999

            # increment complete
            complete += 1
            check = False

            # find finish time of current process
            fint = 1 + t

            # calculate waiting time
            wt[rq] = (fint - proc[rq][2] - proc[rq][1])

            if(wt[rq] < 0):
                wt[rq] = 0

        shorts(rq,t)     # step 1 on current process with shortest job
        t += 1              # increment time

##################################################################
        
def findTAT(proc, n, wt, tat):      # processes, number of process, waiting time, turn around time
    for i in range(n):
        tat[i] = proc[i][2] + wt[i] # compute turn around time

##################################################################

def findAvgT(proc, n):
    wt = [0] * n        # WAITING TIME 
    tat = [0] * n       # TURN AROUND TIME
    pt = [0]
    findWT(proc,n,wt)           # find waiting time
    findTAT(proc,n,wt,tat)      # find turn around time

    totalWT = 0         # total waiting time
    totalTAT = 0        # total turn around time
    for i in range(n):
        totalWT += wt[i]    # add all waiting time
        totalTAT += tat[i]  # add all turn around time

    avgWT = totalWT/n   # find average of waiting time
    avgTAT = totalTAT/n # find average of turn around time
    gui(proc,n,wt,tat,avgWT,avgTAT,pt) # call gui

def main():
    findAvgT(globalVar.proc,globalVar.numP)

main()


